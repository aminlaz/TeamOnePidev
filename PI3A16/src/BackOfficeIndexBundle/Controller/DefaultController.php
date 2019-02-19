<?php

namespace BackOfficeIndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@BackOfficeIndex/Default/index.html.twig');
    }
}
