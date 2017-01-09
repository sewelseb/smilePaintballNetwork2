<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 07-09-16
 * Time: 17:09
 */

namespace Smile\PlatformBundle\Controller;
use Doctrine\DBAL\Types\IntegerType;
use Smile\PlatformBundle\Entity\Event;
use Smile\PlatformBundle\Entity\Post;
use Smile\PlatformBundle\Entity\PostPic;
use Smile\PlatformBundle\Form\EventProfilePicType;
use Smile\UserBundle\Form\ProfilePicType;
use Smile\UserBundle\Form\teamPictureType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;



class EventController extends Controller
{
    public function seeAllAction()
    {
        $eventRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Event');
        $events = $eventRepo->getUpcomingEvents();

        dump($events);

        return $this->render('SmilePlatformBundle:Default:events.html.twig',array(
            'events' => $events
        ));
    }

    public function addNewAction(Request $request)
    {
        $redirect = false;

        $event = new Event();

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $event);



        $formBuilder
            ->add('name', TextType::class)
            ->add('description', TextareaType::class)
            ->add('ticketLinck', TextType::class, array('required' => false))
            ->add('prix', TextType::class, array('required' => false))
            ->add('startingDate', DateType::class)
            ->add('endDate', DateType::class)
            ->add('country', CountryType::class)
            ->add('picture', EventProfilePicType::class)
            ->add('save', SubmitType::class);

        $form = $formBuilder->getForm();

        /*$form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();

        $em->persist($event);

        $em->flush();*/



        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $event->setUser($this->getUser());

            if ($event->getPicture() != null) {
                $event->getPicture()->upload($event, $this->container);
            }
            $event->setStartingDate($event->getStartingDate()->getTimestamp());
            $event->setEndDate($event->getEndDate()->getTimestamp());

            $post = new Post();
            $postPic = new PostPic();
            $postPic->setUrl($event->getPicture()->getUrl());
            $postPic->setAlt($event->getPicture()->getAlt());
            $post->setPicture($postPic);
            $post->setTitle('New Event: '.$event->getName());
            $post->setCreationTime(time());
            $post->setUser($this->getUser());
            $post->setEvent($event);
            $post->setIsEvent(true);
            $post->setType('event_picture');


            $em = $this->getDoctrine()->getManager();

            $em->persist($event);
            $em->persist($post);

            $em->flush();

        }
        else
        {
            //return $form->handleRequest($request);
        }

        return $this->render('SmilePlatformBundle::Default/form/addNewEvent.html.twig', array(

            'form' => $form->createView(),


        ));

    }

    public function showAction($eventId)
    {
        $eventRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Event');
        $event = $eventRepo->find($eventId);

        return $this->render('SmilePlatformBundle::Default/event.html.twig', array(
            'event' => $event
        ));
    }
}