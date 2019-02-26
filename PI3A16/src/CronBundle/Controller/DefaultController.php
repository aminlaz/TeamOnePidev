<?php

namespace CronBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CronBundle:Default:index.html.twig');
    }



}
