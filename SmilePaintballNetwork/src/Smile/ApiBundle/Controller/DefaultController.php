<?php

namespace Smile\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;

class DefaultController extends FOSRestController
{
    public function indexAction()
    {
        return $this->render('SmileApiBundle:Default:index.html.twig');
    }

    public function setThermsAndAgreementsCookieAction(Request $request){
        //$response->headers->setCookie(new Cookie('foo', 'bar'));
        $cookie = new Cookie('termsAndAgreementsValidated', 'true', (time() + 3600 * 24 * 365), '/');
        $response = new Response();
        $response->headers->setCookie($cookie);
        $response->send();

        $view = $this->view('', 200)
            ->setTemplate("SmileApiBundle:Default:index.html.twig")
            ->setTemplateVar('posts')
        ;

        return $this->handleView($view);

    }
}
