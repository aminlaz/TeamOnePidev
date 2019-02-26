<?php

namespace ProfilingBundle\Controller;

use ProfilingBundle\Entity\loula;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class JarebController extends Controller




{




    public function jarebAction()
    {
        $data = $this->getDoctrine()->getRepository(loula::class)->findAll();
        return $this->render('@Profiling/Jareb/jareb.html.twig', array('data' => $data));
    }



    public function updateAction(Request $request)
    {
        if ($request->isXmlHttpRequest())
        {
            $data=$this->getDoctrine()->getManager();
            $criteria=$request->request->get('criteria');
            $value=(int)$request->request->get('value');

            if ($value===0)
            {
                $response=$this->getDoctrine()->getRepository(loula::class)->intoArray();
            }
            else           {            $response=$data->getRepository(loula::class)->searchByCriteria($value,$criteria);}
            return new JsonResponse($response);

        }
        else return new Response("no");
    }


}
