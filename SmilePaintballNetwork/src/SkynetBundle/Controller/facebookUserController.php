<?php

namespace SkynetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class facebookUserController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function listUsersAction()
    {
        return $this->render('SkynetBundle:FacebookUser:ShowUsers.html.twig');
    }
}
