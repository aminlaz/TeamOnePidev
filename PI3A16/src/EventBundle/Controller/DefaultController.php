<?php

namespace EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Event/Default/index.html.twig');
    }
    public function eventAction()
    {
        return $this->render('@Event/Default/event.html.twig');
    }

}
