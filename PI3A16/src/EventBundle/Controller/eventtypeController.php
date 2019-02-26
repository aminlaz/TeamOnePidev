<?php

namespace EventBundle\Controller;

use EventBundle\Entity\eventtype;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Eventtype controller.
 *
 */
class eventtypeController extends Controller
{
    /**
     * Lists all eventtype entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $eventtypes = $em->getRepository('EventBundle:eventtype')->findAll();

        return $this->render('@Event/eventtype/index.html.twig'
            , array(
            'eventtypes' => $eventtypes,
        ));
    }

    /**
     * Creates a new eventtype entity.
     *
     */
    public function newAction(Request $request)
    {
        $eventtype = new Eventtype();
        $form = $this->createForm('EventBundle\Form\eventtypeType', $eventtype);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($eventtype);
            $em->flush();

            return $this->redirectToRoute('eventtype_show', array('id' => $eventtype->getId()));
        }

        return $this->render('@Event/eventtype/new.html.twig', array(
            'eventtype' => $eventtype,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a eventtype entity.
     *
     */
    public function showAction(eventtype $eventtype)
    {
        $deleteForm = $this->createDeleteForm($eventtype);

        return $this->render('@Event/eventtype/show.html.twig', array(
            'eventtype' => $eventtype,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing eventtype entity.
     *
     */
    public function editAction(Request $request, eventtype $eventtype)
    {
        $deleteForm = $this->createDeleteForm($eventtype);
        $editForm = $this->createForm('EventBundle\Form\eventtypeType', $eventtype);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('eventtype_edit', array('id' => $eventtype->getId()));
        }

        return $this->render('@Event/eventtype/edit.html.twig', array(
            'eventtype' => $eventtype,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a eventtype entity.
     *
     */
    public function deleteAction(Request $request, eventtype $eventtype)
    {



        if (!$eventtype) {
            throw $this->createNotFoundException('Unable to find Preisliste entity.');
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($eventtype);
        $em->flush();


        return $this->redirectToRoute('eventtype_index');
    }

    /**
     * Creates a form to delete a eventtype entity.
     *
     * @param eventtype $eventtype The eventtype entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(eventtype $eventtype)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('eventtype_delete', array('id' => $eventtype->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
