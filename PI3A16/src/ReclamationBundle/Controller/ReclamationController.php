<?php

namespace ReclamationBundle\Controller;

use EventBundle\Entity\Event;
use EventBundle\EventBundle;
use ReclamationBundle\Entity\Reclamation;
use ReclamationBundle\Form\ReclamationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Reclamation controller.
 *
 */
class ReclamationController extends Controller
{
    /**
     * Lists all  reclamation entities.
     *
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $reclamations = $em->getRepository('ReclamationBundle:Reclamation')->findDQL();
        return $this->render('@Reclamation/Reclamation/list.html.twig', array(
            'reclamations' => $reclamations,
        ));
    }

    /**
     * Lists the new  reclamation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reclamations = $em->getRepository('ReclamationBundle:Reclamation')->findDQL();
        $list = $em->getRepository('ReclamationBundle:Reclamation')->RechercheDQL('traite',0);


        return $this->render('@Reclamation/Reclamation/index.html.twig', array(
            'reclamations' => $reclamations,
        ));
    }


    /**
     * Creates a new reclamation entity.
     *
     */
    public function newAction(Request $request)
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);

        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository('ReclamationBundle:Reclamation')
                     ->findEventDQL($this->getUser()->getId());

        $organisateurs = $em->getRepository('ReclamationBundle:Reclamation')
                            ->findOrganisateurDQL($this->getUser()->getId());

        $idEvent=$request->get('idEvent');
        $idOrganisateur=$request->get('idOrganisateur');

        $form->handleRequest($request);
        if (($form->isValid())&&(isset($idEvent))&&(isset($idOrganisateur)))
        {
            $event = $em->getRepository('EventBundle:Event')->find($idEvent);
            $organisateur = $em->getRepository('UserBundle:User')->find($idOrganisateur);

            $reclamation->setDateR(new \DateTime);
            $reclamation->setTraite(false);
            $reclamation->setCorbeille(false);
            $reclamation->setDateCorbeille(null);
            $reclamation->setArchive(false);
            $reclamation->setDateArchive(null);
            $reclamation->setUser($this->getUser());
            $reclamation->setEvent($event);
            $reclamation->setOrganisateur($organisateur);
            $em->persist($reclamation);
            $em->flush();

            return $this->redirectToRoute('reclamation_show', array('id' => $reclamation->getId()));
        }

        return $this->render('@Reclamation/Reclamation/new.html.twig', array(
            'form' => $form->createView(),
            'events'=>$events,
            'organisateurs'=>$organisateurs,
        ));
    }

    /**
     * Finds and displays a reclamation entity.
     *
     */
    public function showAction(Reclamation $reclamation)
    {
        $deleteForm = $this->createDeleteForm($reclamation);

        return $this->render('@Reclamation/Reclamation/show.html.twig', array(
            'reclamation' => $reclamation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function showBoAction(Reclamation $reclamation)
    {
        $deleteForm = $this->createDeleteForm($reclamation);

        return $this->render('@Reclamation/Reclamation/showBo.html.twig', array(
            'reclamation' => $reclamation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reclamation entity.
     *
     */
    public function editAction(Request $request, Reclamation $reclamation)
    {
        $deleteForm = $this->createDeleteForm($reclamation);
        $editForm = $this->createForm('ReclamationBundle\Form\ReclamationType', $reclamation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reclamation_show', array('id' => $reclamation->getId()));
        }

        return $this->render('@Reclamation/Reclamation/edit.html.twig', array(
            'reclamation' => $reclamation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reclamation entity.
     *
     */
    public function deleteAction(Request $request, Reclamation $reclamation)
    {
        $form = $this->createDeleteForm($reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reclamation);
            $em->flush();
        }

        return $this->redirectToRoute('reclamation_index');
    }

    /**
     * Creates a form to delete a reclamation entity.
     *
     * @param Reclamation $reclamation The reclamation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reclamation $reclamation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reclamation_delete', array('id' => $reclamation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function corbeilleAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reclamations = $em->getRepository('ReclamationBundle:Reclamation')->RechercheDQL('corbeille',1);

        return $this->render('@Reclamation/Reclamation/corbeille.html.twig', array(
            'reclamations' => $reclamations,
        ));
    }

    public function toCorbeilleAction(Reclamation $reclamation )
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation->setCorbeille(1);
        $reclamation->setDateCorbeille(new \DateTime);
        $em->persist($reclamation);
        $em->flush();
        return $this->redirectToRoute('reclamation_list');
    }

    public function restaurerCorbAction(Reclamation $reclamation )
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation->setCorbeille(0);
        $reclamation->setDateCorbeille(null);
        $em->persist($reclamation);
        $em->flush();
        return $this->redirectToRoute('corbeille');
    }

    public function deleteCorbAction(Reclamation $reclamation)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($reclamation);
        $em->flush();

        return $this->redirectToRoute('corbeille');
    }

    public function archiveAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reclamations = $em->getRepository('ReclamationBundle:Reclamation')->RechercheDQL('archive',1);

        return $this->render('@Reclamation/Reclamation/archive.html.twig', array(
            'reclamations' => $reclamations,
        ));
    }

    public function toArchiveAction(Reclamation $reclamation)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation->setArchive(1);
        $reclamation->setDateArchive(new \DateTime);
        $em->persist($reclamation);
        $em->flush();
        return $this->redirectToRoute('reclamation_list');
    }

    public function restaurerArchAction(Reclamation $reclamation)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation->setArchive(0);
        $reclamation->setDateArchive(null);
        $em->persist($reclamation);
        $em->flush();
        return $this->redirectToRoute('archive');
    }

    public function cronJobClearCorbeille()
    {
        $em=$this->getDoctrine()->getManager();
        $reclamations = $em->getRepository(Reclamation::class)->rechercheDQL('Corbeille',1);
        foreach ($reclamations as $reclamation)
        {
            if(date_diff( new \DateTime(),$reclamation->getDateCorbeille())->days >1 )
            {
                $em->remove($reclamation);
                $em->flush();
            }

        }
    }
}
