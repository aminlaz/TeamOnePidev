<?php

namespace NotificationBundle\Controller;

use NotificationBundle\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Notification controller.
 *
 */
class NotificationController extends Controller
{
    /**
     * Lists all notification entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $notifications = $em->getRepository('NotificationBundle:Notification')->findAll();

        return $this->render('@Notification/notification/index.html.twig', array(
            'notifications' => $notifications,
        ));
    }


    /**
     * Deletes a notification entity.
     *
     */
    public function deleteAction( Notification $notification)
    {
            $em = $this->getDoctrine()->getManager();
            $em->remove($notification);
            $em->flush();

        return $this->redirectToRoute('notification_index');
    }

}
