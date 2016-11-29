<?php

namespace SkynetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GroupController extends Controller
{


    public function listGroupsAction()
    {
        return $this->render('SkynetBundle:Group:showGroup.html.twig');
    }
}
