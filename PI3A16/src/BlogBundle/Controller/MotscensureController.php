<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Motscensure;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Motscensure controller.
 *
 */
class MotscensureController extends Controller
{
    /**
     * Lists all motscensure entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $motscensures = $em->getRepository('BlogBundle:Motscensure')->findAll();

        return $this->render('@Blog/Motscensure/affichermotsclebo.html.twig', array(
            'motscensures' => $motscensures,
        ));
    }

    /**
     * Creates a new motscensure entity.
     *
     */
    public function newAction(Request $request)
    {
        $motscensure = new Motscensure();
        $form = $this->createForm('BlogBundle\Form\MotscensureType', $motscensure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($motscensure);
            $em->flush();

            return $this->redirectToRoute('affichermotsclebo', array('id' => $motscensure->getId()));
        }

        return $this->render('@Blog/Motscensure/ajoutermotsclebo.html.twig', array(
            'motscensure' => $motscensure,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a motscensure entity.
     *
     */
    public function showAction(Motscensure $motscensure)
    {
        $deleteForm = $this->createDeleteForm($motscensure);

        return $this->render('motscensure/show.html.twig', array(
            'motscensure' => $motscensure,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing motscensure entity.
     *
     */
    public function editAction(Request $request, Motscensure $motscensure)
    {
        $deleteForm = $this->createDeleteForm($motscensure);
        $editForm = $this->createForm('BlogBundle\Form\MotscensureType', $motscensure);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('affichermotsclebo', array('id' => $motscensure->getId()));
        }

        return $this->render('@Blog/Motscensure/modifiermotsclebo.html.twig', array(
            'motscensure' => $motscensure,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a motscensure entity.
     *
     */
    public function deleteAction(Request $request, Motscensure $motscensure)
    {
        $form = $this->createDeleteForm($motscensure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($motscensure);
            $em->flush();
        }

        return $this->redirectToRoute('affichermotsclebo');
    }

    /**
     * Creates a form to delete a motscensure entity.
     *
     * @param Motscensure $motscensure The motscensure entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Motscensure $motscensure)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('effacermotsclebo', array('id' => $motscensure->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
