<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 20-09-16
 * Time: 18:06
 */

namespace Smile\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Smile\PlatformBundle\Entity\Comment;
use Symfony\Component\HttpFoundation\Request;


class EventController extends FOSRestController
{
    public function attendAsMeToEventAction($eventId)
    {
        $eventRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Event');
        $event = $eventRepo->find($eventId);

        if(!$event->getUserComing()->contains($this->getUser()))
        {
            $event->addUserComing($this->getUser());

            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();
        }

        $view = $this->view('', 200)
            ->setTemplate("SmileApiBundle:Default:index.html.twig")
            ->setTemplateVar('posts')
        ;

        return $this->handleView($view);

    }

    public function attendAsTeamToEventAction($eventId, $teamId)
    {
        $eventRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Event');
        $event = $eventRepo->find($eventId);
        $teamRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Teamt');
        $team = $eventRepo->find($teamId);

        if(!$event->getTeamComing()->contains($team) && $this->getUser()->getTeams()->contains($team))
        {
            $event->addTeamComing($team);

            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();
        }

        $view = $this->view('', 200)
            ->setTemplate("SmileApiBundle:Default:index.html.twig")
            ->setTemplateVar('posts')
        ;

        return $this->handleView($view);

    }
}