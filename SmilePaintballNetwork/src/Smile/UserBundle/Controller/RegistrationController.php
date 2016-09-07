<?php

namespace Smile\UserBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;

class RegistrationController extends BaseController
{
    public function registerAction(Request $request)
    {
        //dump($request);

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');
        $user = $userManager->createUser();
        $user->setEnabled(true);
        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);
        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }
        $form = $formFactory->createForm();
        $form->setData($user);
        $form->handleRequest($request);
        //dump($request->getSession()->getFlashBag());

        if ($form->isValid()) {

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);
            $userManager->updateUser($user);
            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_registration_confirmed');

                $response = new RedirectResponse($url);
            }

            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));
            //return $response;

            return $this->redirectToRoute('smile_platform_homepage');
        }

        if($request->getRequestUri()=="/register/")
        {
            $form->isValid();
//            dump($form['username']->getErrors()[0]->getMessage());
//            dump($form['email']);
//            dump($form['plainPassword']->getViewData()['first']);
            foreach ($form['username']->getErrors() as $error)
            {
                if($error->getMessage()=="fos_user.username.already_used"){
                    $this->addFlash(
                        'notice',
                        'This username is already used!'
                    );
                }
                else
                {
                    $this->addFlash(
                        'notice',
                        'This username is not valid!'
                    );
                }

            }
            foreach ($form['email']->getErrors() as $error)
            {
                if($error->getMessage()=="fos_user.email.already_used"){
                    $this->addFlash(
                        'notice',
                        'This email is already used!'
                    );
                }
                else
                {
                    $this->addFlash(
                        'notice',
                        'This email is not valid!'
                    );
                }

            }
            if($form['plainPassword']->getViewData()['first']!=$form['plainPassword']->getViewData()['second']){
                $this->addFlash(
                    'notice',
                    'The passwords doesn\'t match'
                );
            }
//            foreach ($form['plainPassword']->getErrors() as $error)
//            {
//
//
//                $this->addFlash(
//                    'notice',
//                    'The passwords doesn\'t match'
//                );
//
//
//            }


            return $this->redirectToRoute('Smile_platform_homepage');

        }

        return $this->render('FOSUserBundle:Registration:register.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}