<?php

namespace Smile\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SmilePlatformBundle:Default:index.html.twig');
    }

    public function contactAction()
    {
        return $this->render('SmilePlatformBundle:Default:contact.html.twig');
    }
}
