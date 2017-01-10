<?php

namespace Smile\PlatformBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

    public function termsAndAgreementsAction(Request $request)
    {
        $cookies = $request->cookies;

        if ($cookies->has('termsAndAgreementsValidated') && $cookies->get('termsAndAgreementsValidated'))
        {
            return $this->render('SmilePlatformBundle:Default:Blocs/empty.html.twig');
        }
        else
        {
            return $this->render('SmilePlatformBundle:Default:Blocs/showThermsAndAgreements.html.twig');
        }
    }

    public function showThermsAndAgreementsAction()
    {
        return $this->render('SmilePlatformBundle:Default:showThermsAndAgreements.html.twig');
    }
}
