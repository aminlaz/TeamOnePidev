<?php

namespace CommunicationBundle\Controller;

use CommunicationBundle\Entity\Questions;
use CommunicationBundle\Entity\Reponses;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * Question controller.
 *
 */
class QuestionsController extends Controller
{
    /**
     * Lists all question entities.
     *
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $result = $em->createQuery("SELECT q FROM CommunicationBundle:Questions q
        JOIN q.categorie c WHERE c.nom LIKE :search")->setParameter('search', '%' . $request->query->getAlnum('filter') . '%')->getResult();
        return $this->render('@Communication/questions/index.html.twig', array(
            'questions' => $result,
        ));
    }

    public function topAction()
    {

        $em = $this->getDoctrine()->getManager();
        $result = $em->createQuery("SELECT q FROM CommunicationBundle:Questions q order by q.upvotes DESC")->getResult();
        return $this->render('@Communication/questions/index.html.twig', array(
            'questions' => $result,
        ));
    }

    public function approuverAction()
    {

        $em = $this->getDoctrine()->getManager();
        $questions = $em->getRepository('CommunicationBundle:Questions')->findAll();
        return $this->render('@Communication/questions/approuver.html.twig', array(
            'questions' => $questions,
        ));
    }


    /**
     * Creates a new question entity.
     *
     */
    public function newAction(Request $request)
    {
        $question = new Questions();
        $form = $this->createForm('CommunicationBundle\Form\QuestionsType', $question);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $date = new \DateTime($request->get("date"));
            $question->setDate($date);
            $question->setUpvotes(0);
            $question->setDownvotes(0);
            $question->setResolue(0);
            $question->setApprouver(0);
            if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
                $user = $this->container->get('security.token_storage')->getToken()->getUser();
                $question->setIdUser($user);
            }

            $em->persist($question);
            $em->flush();

            return $this->redirectToRoute('questions_show', array('id' => $question->getId()));
        }
        return $this->render('@Communication/questions/new.html.twig', array(
            'questions' => $question,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a question entity.
     *
     */
    public function showAction(Questions $question)
    {
        $deleteForm = $this->createDeleteForm($question);
        $em = $this->getDoctrine()->getManager();
        $reponses = $em->getRepository('CommunicationBundle:Reponses')->findAll();
        return $this->render('@Communication/questions/show.html.twig', array(
            'question' => $question,
            'delete_form' => $deleteForm->createView(),
            'reponses' => $reponses,
        ));
    }

    /**
     * Displays a form to edit an existing question entity.
     *
     */
    public function editAction(Request $request, Questions $question)
    {
        $deleteForm = $this->createDeleteForm($question);
        $editForm = $this->createForm('CommunicationBundle\Form\QuestionsType', $question);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('questions_edit', array('id' => $question->getId()));
        }

        return $this->render('@Communication/questions/edit.html.twig', array(
            'question' => $question,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a question entity.
     *
     */
    public function deleteAction(Request $request, Questions $question)
    {
        $form = $this->createDeleteForm($question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->remove($question);
            $em->flush();
        }

        return $this->redirectToRoute('questions_index');
    }

    public function deleteQAction(Questions $question,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository(Questions::class)->find($id);
        $em->remove($question);
        $em->flush();

        return $this->redirectToRoute('questions_approuver', array('id' => $question->getId()));
    }

    /**
     * Creates a form to delete a question entity.
     *
     * @param Questions $question The question entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Questions $question)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('questions_delete', array('id' => $question->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    public function approuveeAction(Request $request, Questions $question)
    {
        $editForm = $this->createForm('CommunicationBundle\Form\QuestionsType', $question);
        $editForm->handleRequest($request);
        $question->setApprouver(1);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute('questions_approuver', array('id' => $question->getId()));

    }

    /**
     * Deletes a review entity.
     * @Route("/{idR}/supp/{id}")
     * @ParamConverter("reponse", options={"id" = "idR"})
     * @ParamConverter("question", options={"id" = "id"})
     */

    public function suppAction(Questions $question, Reponses $idR)
    {

        $em = $this->getDoctrine()->getManager();
        $reponses = $em->getRepository(Reponses::class)->find($idR);
        if ($question->getIdMR() == $idR) {
            $question->setIdMR(null);
            $question->setResolue(0);
            $em->flush();
        }

        $em->remove($reponses);
        $em->flush();

        return $this->redirectToRoute('questions_show', array('id' => $question->getId()));

    }

    public function reponseAction(Questions $question, Request $request)
    {
        $reponse = new Reponses();
        if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {

            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $reponse->setIdUser($user);
            $reponse->setTexte($request->get("reponse"));
            $reponse->setIdQuestion($question);
            $date = new \DateTime($request->get("date"));
            $reponse->setDate($date);
            $em = $this->getDoctrine()->getManager();
            $em->persist($reponse);
            $em->flush();
        }
        return $this->redirectToRoute('questions_show', array('id' => $question->getId()));
    }

    /**
     * Deletes a review entity.
     * @Route("/{idR}/supp/{id}")
     * @ParamConverter("reponse", options={"id" = "idR"})
     * @ParamConverter("question", options={"id" = "id"})
     */

    public function meilleurAction(Reponses $reponse, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository(Questions::class)->find($id);
        $question->setIdMR($reponse);
        $question->setResolue(1);
        $em->persist($question);
        $em->flush();
        return $this->redirectToRoute('questions_show', array('id' => $question->getId()));

    }
}
