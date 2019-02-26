<?php

namespace EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function eventAction()
    {
        return $this->render('@Event/Default/event.html.twig');
    }
    public function addeventAction()
    {
        return $this->render('@Event/Default/addevent.html.twig');
    }

}
