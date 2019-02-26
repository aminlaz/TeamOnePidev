<?php

namespace ReclamationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function reclamationAction()
    {
        return $this->render('@Reclamation/Default/reclamation.html.twig');
    }

}
