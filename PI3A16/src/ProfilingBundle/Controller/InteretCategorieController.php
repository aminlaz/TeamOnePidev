<?php

namespace ProfilingBundle\Controller;

use ProfilingBundle\Entity\CategorieInteret;
use ProfilingBundle\Entity\Interet;
use ProfilingBundle\Form\CategorieInteretType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InteretCategorieController extends Controller
{
    public function ajouterInteretCategorieAction(Request $request)
    {
        $badge=new CategorieInteret();
        $form=$this->createForm(CategorieInteretType::class, $badge);
        $form->handleRequest($request);
        if($form->isValid())
        {
            $em=$this->getDoctrine();
            $em->getManager()->persist( $badge);
            $em->getManager()->flush();
            return $this->redirectToRoute('ajouter_interet_categorie');
        }
        return $this->render('@Profiling\InteretCategorie\ajouter_interet_categorie.html.twig', array(
            'form'=>$form->createView()
        ));
    }

    public function supprimerInteretCategorieAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $interet=$em->getRepository('ProfilingBundle:Interet')->findBy(array('categorie' => $id));
        foreach ($interet as &$value)
        {
            $em->remove($value);
        }
        $delete=$em->getRepository(CategorieInteret::class)->find($id);
        $em->remove($delete);
        $em->flush();
        return $this->redirectToRoute('afficher_interet_categorie');
    }

    public function afficherInteretCategorieAction()
    {
        $reader=$this->getDoctrine()->getRepository(CategorieInteret :: class)->findAll();
        return $this->render('@Profiling\InteretCategorie\afficher_interet_categorie.html.twig', array(
            'reader'=>$reader
        ));
    }

    public function modifierInteretCategorieAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $projet = $em->getRepository(CategorieInteret::class)->find($id);
        //third step:
        $form=$this->createForm(CategorieInteretType::class,$projet);
        $checkout=$form->handleRequest($request);
        if($checkout->isValid())
        {
            $em->flush();
            return $this->redirectToRoute('afficher_interet_categorie');
        }
        return $this->render('@Profiling\InteretCategorie\modifier_interet_categorie.html.twig', array(

            'form'=>$form->createView()

        ));


    }

}
