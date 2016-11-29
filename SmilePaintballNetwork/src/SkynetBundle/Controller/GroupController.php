<?php

namespace SkynetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GroupController extends Controller
{
    public function listGroupsAction()
    {
        return $this->render('SkynetBundle:Group:showGroup.html.twig');
    }

    public function addCSVAction()
    {
        $request = Request::createFromGlobals();

        // the URI being requested (e.g. /about) minus any query parameters
        $request->getPathInfo();
        $csv = str_getcsv ($request->query->get('csvFile'));

        return $this->render('SkynetBundle:Group:csv.html.twig', array('csv'=>$csv));
    }

}
