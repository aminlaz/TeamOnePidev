<?php

namespace CommunicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function forumAction()
    {
        return $this->render('@Communication/Default/forum.html.twig');
    }
}
