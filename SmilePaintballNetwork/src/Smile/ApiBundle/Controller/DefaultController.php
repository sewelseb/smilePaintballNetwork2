<?php

namespace Smile\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SmileApiBundle:Default:index.html.twig');
    }
}
