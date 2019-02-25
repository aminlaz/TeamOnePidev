<?php

namespace EventBundle\Controller;

use EventBundle\Entity\Event;
use EventBundle\Entity\review;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * Review controller.
 *
 */
class reviewController extends Controller
{

    /**
     * Deletes a review entity.
     * @Route("/{id}/delete/{idevent}")
     * @ParamConverter("review", options={"id" = "id"})
     * @ParamConverter("event", options={"id" = "idevent"})
     */
    public function deleteAction(review $review,Event $event)
    {
        $em = $this->getDoctrine()->getManager();
        if (!$review) {
            throw $this->createNotFoundException('Unable to find Preisliste entity.');
        }

        $em->remove($review);
        $em->flush();


        return $this->redirectToRoute('events_show', array('id' => $event->getId()));
    }

}
