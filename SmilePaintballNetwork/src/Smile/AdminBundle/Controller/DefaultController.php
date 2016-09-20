<?php

namespace Smile\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SmileAdminBundle:Default:index.html.twig');
    }
}
