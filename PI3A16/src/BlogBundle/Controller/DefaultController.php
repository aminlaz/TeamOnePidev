<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function blogAction()
    {
        return $this->render('@Blog\Default\blog.html.twig');
    }
}
