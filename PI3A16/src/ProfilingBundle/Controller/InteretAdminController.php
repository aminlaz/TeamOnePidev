<?php

namespace ProfilingBundle\Controller;

use ProfilingBundle\Entity\Interet;
use ProfilingBundle\Form\InteretType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class InteretAdminController extends Controller
{
    public function ajouterInteretAdminAction(Request $request)
    {
        $interet=new Interet();
        $form=$this->createForm(InteretType::class, $interet);
        $form->handleRequest($request);
        if($form->isValid())
        {
            $em=$this->getDoctrine();
            $em->getManager()->persist( $interet);
            $em->getManager()->flush();
            return $this->redirectToRoute('ajouter_interet_admin');
        }
        return $this->render('@Profiling\InteretAdmin\ajouter_interet_admin.html.twig', array(
            'form'=>$form->createView()
        ));

    }

    public function supprimerInteretAdminAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $delete=$em->getRepository(Interet::class)->find($id);
        $em->remove($delete);
        $em->flush();
        return $this->redirectToRoute('afficher_interet_admin');

    }

    public function afficherInteretAdminAction()
    {
        $data=$this->getDoctrine()->getRepository(Interet :: class)->findAll();

        return $this->render('@Profiling\InteretAdmin\afficher_interet_admin.html.twig', array(
            'data'=>$data
        ));

    }

    public function modifierInteretAdminAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $projet = $em->getRepository(Interet::class)->find($id);
        //third step:
        $form=$this->createForm(InteretType::class,$projet);
        $checkout=$form->handleRequest($request);
        if($checkout->isValid())
        {
            $em->flush();
            return $this->redirectToRoute('afficher_interet_admin');
        }
        return $this->render('@Profiling\InteretAdmin\modifier_interet_admin.html.twig', array(

            'form'=>$form->createView()

        ));




}


    public function searchInteretAction(Request $request)
    {
        if ($request->isXmlHttpRequest())
        {
            $data=$this->getDoctrine()->getManager();
            $categorie=$request->request->get('categorie');


            if ( $categorie==0)
            {
                $response=$data->getRepository(Interet::class)->searchByInteret($categorie);            }






            return new JsonResponse($response);

        }
        else return new Response("wrong");
    }



}
