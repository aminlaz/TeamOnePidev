<?php

namespace ProfilingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProfilingBundle:Default:index.html.twig');
    }
}
