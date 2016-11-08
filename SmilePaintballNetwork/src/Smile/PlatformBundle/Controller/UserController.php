<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 07-09-16
 * Time: 17:09
 */

namespace Smile\PlatformBundle\Controller;
use Smile\UserBundle\Form\ProfilePicType;
use Smile\UserBundle\Form\teamPictureType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class UserController extends Controller
{
    public function userProfileAction($userId){

        $userRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmileUserBundle:User');
        $user = $userRepo->find($userId);


        $postRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Post');
        $posts = $postRepo->getUsersPost($user);

        return $this->render('SmilePlatformBundle:Default:profile.html.twig', array(
            'posts' => $posts,
            'user' =>$user
        ));
    }

    public function editMyProfileAction(Request $request)
    {
        $user = $this->getUser();

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $user);

        $formBuilder
            ->add('firstName',     TextType::class, array('required' =>false))
            ->add('lastName',     TextType::class, array('required' =>false))
            ->add('picture', ProfilePicType::class, array('required' =>false))

            ->add('save',      SubmitType::class)
        ;

        $form = $formBuilder->getForm();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            if ($user->getPicture() == null)
            {
                $user->setPicture($this->getUser()->getPicture());
            }
            else
            {
                $user->getPicture()->upload($user);
            }
            if ($user->getTeamPicture() == null)
            {
                $user->setTeamPicture($this->getUser()->getTeamPicture());
            }
            else
            {
                $user->getTeamPicture()->upload($user);
            }
            $em = $this->getDoctrine()->getManager();

            $em->persist($user);

            $em->flush();

            return $this->render('SmilePlatformBundle::Default/form/actualise.html.twig', array(

                'formEditProfile' => $form->createView(),

            ));
        }

        return $this->render('SmileUserBundle::Default/form/editProfile.html.twig', array(

            'formEditProfile' => $form->createView(),

        ));
    }
}