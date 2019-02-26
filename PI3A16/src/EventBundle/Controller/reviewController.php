<?php

namespace EventBundle\Controller;

use EventBundle\Entity\Event;
use EventBundle\Entity\review;
use EventBundle\Entity\reviewlike;
use EventBundle\EventBundle;
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
    public function deleteAction(review $review, Event $event)
    {
        $em = $this->getDoctrine()->getManager();
        if (!$review) {
            throw $this->createNotFoundException('Unable to find Preisliste entity.');
        }

        $em->remove($review);
        $em->flush();


        return $this->redirectToRoute('events_show', array('id' => $event->getId()));
    }


    /**
     * likes or dislikes a review entity.
     * @Route("/{id}/like/{idevent}")
     * @ParamConverter("review", options={"id" = "id"})
     * @ParamConverter("event", options={"id" = "idevent"})
     */
    public function likeAction(review $review, Event $event)
    {
        $em = $this->getDoctrine()->getManager();
        $mylike= $em->getRepository('EventBundle:reviewlike')
            ->findOneBy(['idreview' => $review->getId(), 'iduser' => $this->getUser()->getId()]);
        if($mylike==null)
        {
            $review->setLikes($review->getLikes() + 1);
            $mylike = new reviewlike();
            $mylike->setIduser($this->getUser());
            $mylike->setIdreview($review);
            $em->persist($mylike);
        }
        else
        {
            $review->setLikes($review->getLikes() -1);
            $em->remove($mylike);
        }
        $em->persist($review);
        $em->flush();




        return $this->redirectToRoute('events_show', array('id' => $event->getId()));
    }


}
