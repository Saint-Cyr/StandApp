<?php

namespace StandAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('StandAppBundle:Default:index.html.twig');
    }
    
    public function dashboardAction()
    {
        return $this->render('StandAppBundle:Default:dashboard.html.twig');
    }
}
