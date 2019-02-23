<?php

namespace NotificationBundle\Controller;

use NotificationBundle\Entity\Notification;
use NotificationBundle\NotificationBundle;
use NotificationBundle\Repository\NotificationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
       // return $this->render('NotificationBundle:Default:index.html.twig');
    }
    public function displayAction()
    {
        $em = $this->getDoctrine()->getManager();
        $notification= $em->getRepository('NotificationBundle:Notification')
                            ->rechercheDQL('seen',0);
        $not=count($notification);

        return($this->render('@Notification/Default/index.html.twig',array(
            'notifications' => $notification,
           'notif'=> $not,

        )));
    }
}
