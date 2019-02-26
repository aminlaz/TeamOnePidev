<?php

namespace ReclamationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function reclamationAction()
    {
        return $this->redirectToRoute('reclamation');
    }

}
