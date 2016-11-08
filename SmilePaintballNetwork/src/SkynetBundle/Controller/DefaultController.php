<?php

namespace SkynetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SkynetBundle:Default:index.html.twig');
    }
}
