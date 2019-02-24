<?php

namespace NotificationBundle\Controller;

use NotificationBundle\Entity\Notification;
use NotificationBundle\NotificationBundle;
use NotificationBundle\Repository\NotificationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
       // return $this->render('NotificationBundle:Default:index.html.twig');
    }
    public function displayAction()
    {
        $em = $this->getDoctrine()->getManager();
        $notificationNotSeen= $em->getRepository('NotificationBundle:Notification')
                            ->rechercheDQL('seen',0);
        $not=count($notificationNotSeen);

        $notification= $em->getRepository('NotificationBundle:Notification')
            ->findAll();

        return($this->render('@Notification/Default/index.html.twig',array(
            'notifications' => $notification,
           'notif'=> $not,

        )));
    }

    public function updateAction()
    {
            $em = $this->getDoctrine()->getManager();
            $em->getRepository('NotificationBundle:Notification')
                ->updateDQL();
            $em->flush();


        return $this->displayAction();

    }
}
