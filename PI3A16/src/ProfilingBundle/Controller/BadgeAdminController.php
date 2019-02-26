<?php

namespace ProfilingBundle\Controller;

use ProfilingBundle\Entity\Badge;
use ProfilingBundle\Form\BadgeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\User;
use UserBundle\Form\UserBadgeType;
use UserBundle\Form\UserType;


class BadgeAdminController extends Controller
{
    public function ajouterBadgeAdminAction(Request $request)
    {
        $badge=new Badge();
        $form=$this->createForm(BadgeType::class, $badge);
        $form->handleRequest($request);
        if($form->isValid())
        {
            $badge->setCreatedAt(new\DateTime());
            $em=$this->getDoctrine();
            $em->getManager()->persist( $badge);
            $em->getManager()->flush();
            return $this->redirectToRoute('ajouter_badge_admin');
        }
        return $this->render('@Profiling\BadgeAdmin\ajouter_badge_admin.html.twig', array(
            'form'=>$form->createView()
        ));
    }

    public function afficherBadgeAdminAction()
    {
        $reader=$this->getDoctrine()->getRepository(Badge :: class)->findAll();

        return $this->render('@Profiling\BadgeAdmin\afficher_badge_admin.html.twig', array(
            'reader'=>$reader

        ));
    }



    public function supprimerBadgeAdminAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $delete=$em->getRepository(Badge::class)->find($id);
        $em->remove($delete);
        $em->flush();
        return $this->redirectToRoute('afficher_badge_admin');
    }

    public function modifierBadgeAdminAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $projet = $em->getRepository(Badge::class)->find($id);
        //third step:
        $form = $this->createForm(BadgeType::class, $projet);
        $checkout = $form->handleRequest($request);
        if ($checkout->isValid()) {
            $em->flush();
            return $this->redirectToRoute('afficher_badge_admin');
        }
        return $this->render('@Profiling\BadgeAdmin\modifier_badge_admin.html.twig', array(

            'form' => $form->createView()

        ));

    }


    public function afficherUserAction()
    {
        $data=$this->getDoctrine()->getRepository(User :: class)->findAll();

        return $this->render('@Profiling\BadgeAdmin\afficher_user.html.twig', array(
            'data'=>$data

        ));

    }


        public function attribuerBadgeAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $projet = $em->getRepository(User::class)->find($id);

        $reader=$this->getDoctrine()->getRepository(Badge :: class)->findAll();
        $form=$this->createForm(UserBadgeType::class,$projet);
        $checkout=$form->handleRequest($request);
        if($checkout->isValid())
        {
            $em->flush();
            return $this->redirectToRoute('afficher_user');
        }
        return $this->render('@Profiling\BadgeAdmin\attribuer_badge.html.twig', array(

            'form'=>$form->createView(),
            'reader'=>$reader,
            'projet'=>$projet


        ));

    }


    public function searchElementAction(Request $request)
    {
        if ($request->isXmlHttpRequest())
        {
            $data=$this->getDoctrine()->getManager();
            $min=(integer)$request->request->get('min');
            $max=(integer)$request->request->get('max');


            if (($min==0) && ($max==0) )
            {
                $response=$this->getDoctrine()->getRepository(User::class)->intoArray();
            }

            elseif ($min==0 )            {

                $response=$this->getDoctrine()->getRepository(User::class)->searchByMax($max);

            }
            elseif ($max==0 )            {

                $response=$this->getDoctrine()->getRepository(User::class)->searchByMin($min);

            }




            else           {            $response=$data->getRepository(User::class)->searchByMinMax($min,$max);}
            return new JsonResponse($response);

        }
        else return new Response("wrong");
    }




}
