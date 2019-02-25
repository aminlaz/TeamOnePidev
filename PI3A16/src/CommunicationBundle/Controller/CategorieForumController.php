<?php

namespace CommunicationBundle\Controller;

use CommunicationBundle\Entity\CategorieForum;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Categorieforum controller.
 *
 */
class CategorieForumController extends Controller
{
    /**
     * Lists all categorieForum entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categorieForums = $em->getRepository('CommunicationBundle:CategorieForum')->findAll();

        return $this->render('@Communication/categorieforum/index.html.twig', array(
            'categorieForums' => $categorieForums,
        ));
    }

    /**
     * Creates a new categorieForum entity.
     *
     */
    public function newAction(Request $request)
    {
        $categorieForum = new Categorieforum();
        $form = $this->createForm('CommunicationBundle\Form\CategorieForumType', $categorieForum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorieForum);
            $em->flush();

            return $this->redirectToRoute('categorieforum_show', array('id' => $categorieForum->getId()));
        }

        return $this->render('@Communication/categorieforum/new.html.twig', array(
            'categorieForum' => $categorieForum,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a categorieForum entity.
     *
     */
    public function showAction(CategorieForum $categorieForum)
    {
        $deleteForm = $this->createDeleteForm($categorieForum);

        return $this->render('categorieforum/show.html.twig', array(
            'categorieForum' => $categorieForum,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing categorieForum entity.
     *
     */
    public function editAction(Request $request, CategorieForum $categorieForum)
    {
        $deleteForm = $this->createDeleteForm($categorieForum);
        $editForm = $this->createForm('CommunicationBundle\Form\CategorieForumType', $categorieForum);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categorieforum_edit', array('id' => $categorieForum->getId()));
        }

        return $this->render('categorieforum/edit.html.twig', array(
            'categorieForum' => $categorieForum,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a categorieForum entity.
     *
     */
    public function deleteAction(Request $request, CategorieForum $categorieForum)
    {
        $form = $this->createDeleteForm($categorieForum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categorieForum);
            $em->flush();
        }

        return $this->redirectToRoute('categorieforum_index');
    }

    /**
     * Creates a form to delete a categorieForum entity.
     *
     * @param CategorieForum $categorieForum The categorieForum entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CategorieForum $categorieForum)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categorieforum_delete', array('id' => $categorieForum->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
