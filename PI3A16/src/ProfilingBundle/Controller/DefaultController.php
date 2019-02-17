<?php

namespace ProfilingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Profiling/Default/index.html.twig');
    }
}
