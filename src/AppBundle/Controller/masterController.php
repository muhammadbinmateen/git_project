<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class masterController extends Controller
{
    /**
     * @Route("/route", name="route")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Master/master.html.twig');
    }


    /**
     * @Route("/route2", name="route-2")
     */
    public function routeAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Master/submaster.html.twig');
    }

    /**
     * @Route("/route3", name="route-3")
     */
    public function thirdrouteAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Master/submaster.html.twig');
    }


    /**
     * @Route("/route5", name="route-5")
     */
    public function fifthrouteAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Master/submaster.html.twig');
    }


}
