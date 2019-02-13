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
    public function newsAction()
    {
        return $this->render('@Event/Default/news.html.twig');
    }
    public function reclamationAction()
    {
        return $this->render('@Event/Default/reclamation.html.twig');
    }
    public function forumAction()
    {
        return $this->render('@Event/Default/forum.html.twig');
    }
    public function blogAction()
    {
        return $this->render('@Event/Default/blog.html.twig');
    }
}
