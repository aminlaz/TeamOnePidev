<?php

namespace ReservationBundle\Controller;

use ReservationBundle\Entity\Billet;
use ReservationBundle\Repository\BilletRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Billet controller.
 *
 */
class BilletController extends Controller
{
    /**
     * Lists all billet entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $billets = $em->getRepository('ReservationBundle:Billet')->findAll();

        return $this->render('@Reservation/Billet/index.html.twig', array(
            'billets' => $billets,
        ));
    }

    /**
     * Creates a new billet entity.
     *
     */
    public function newAction(Request $request)
    {
        $billet = new Billet();
        $form = $this->createForm('ReservationBundle\Form\BilletType', $billet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($billet);
            $em->flush();

            return $this->redirectToRoute('billet_show', array('id' => $billet->getId()));
        }

        return $this->render('@Reservation/billet/new.html.twig', array(
            'billet' => $billet,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a billet entity.
     *
     */
    public function showAction(Billet $billet)
    {
        $deleteForm = $this->createDeleteForm($billet);

        return $this->render('@Reservation/Billet/show.html.twig', array(
            'billet' => $billet,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function resAction()
    {
        $em = $this->getDoctrine()->getManager();

        $r = $em->getRepository('EventBundle:Event')->findAll();
        return $this->render('@Reservation/reservation/disponibilite.html.twig', array(
            'r' => $r,
        ));
    }
    /**
     * Displays a form to edit an existing billet entity.
     *
     */
    public function editAction(Request $request, Billet $billet)
    {
        $deleteForm = $this->createDeleteForm($billet);
        $editForm = $this->createForm('ReservationBundle\Form\BilletType', $billet);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('billet_edit', array('id' => $billet->getId()));
        }

        return $this->render('@Reservation/Billet/edit.html.twig', array(
            'billet' => $billet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a billet entity.
     *
     */
    public function deleteAction(Request $request, Billet $billet)
    {
        $form = $this->createDeleteForm($billet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($billet);
            $em->flush();
        }

        return $this->redirectToRoute('billet_index');
    }

    /**
     * Creates a form to delete a billet entity.
     *
     * @param Billet $billet The billet entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Billet $billet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('billet_delete', array('id' => $billet->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function rechercheAction(Request $request)
    {
        $billet =new Billet();
        $code=$request->get('code');
        if(isset($code)){
            $billet=$this->getDoctrine()
                    ->getRepository(Billet::class)
                   ->myfindAll($code);
            return $this->render('@Reservation/Billet/recherche.html.twig',array('billets' => $billet,));


        }
        return $this->render('@Reservation/Billet/recherche.html.twig',array('billets' => $billet,));
    }




}
