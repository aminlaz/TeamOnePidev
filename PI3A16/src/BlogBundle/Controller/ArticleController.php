<?php

namespace BlogBundle\Controller;


use BlogBundle\BlogBundle;
use BlogBundle\Entity\Article;
use BlogBundle\Entity\Categorie;
use BlogBundle\Entity\Mail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;

class ArticleController extends Controller
{
    public function sendmailAction(User $user)
    {
        $mail=$user->getEmailCanonical();
        $message = \Swift_Message::newInstance()->setSubject("Ajout Article")->setFrom("hosni.ayachi.98@gmail.com")->setTo($mail)
        ->setBody("Un article a été ajouté dans la catégorie que vous suivez");
        $this->get('mailer')->send($message);
    }

    public function sendmailvuAction(User $user)
    {
        $mail=$user->getEmailCanonical();
        $message = \Swift_Message::newInstance()->setSubject("ARTICLE VIRAL")->setFrom("hosni.ayachi.98@gmail.com")->setTo($mail)
            ->setBody("FELICITATIONS, votre article a atteint les 500 VUs!");
        $this->get('mailer')->send($message);
    }
    public function ajouterarticleAction(Request $request, Categorie $categorie)
    {
        $article = new Article();
        $id = $categorie->getId();
        $article->setIdcateg($categorie);
        $test=$categorie->getAbos();

        $now= new \DateTime("now");
        //$user = $this->get('security.token_storage')->getToken()->getUser();
        $user=$this->getUser();
        $article->setDatearticle($now);
        $article->setIduser($user);
        $form = $this->createForm('BlogBundle\Form\ArticleType', $article);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();
            $test=$categorie->getAbos();
            foreach ($test as &$value)
            {
                $this->sendmailAction($value);
            }
            return $this->redirectToRoute('afficherarticle', array('id' => $id));
        }

        return $this->render('@Blog/Article/ajouterarticle.html.twig', array(
            'article' => $article,
            'form' => $form->createView(),
            'idcateg' => $id,

        ));
    }

    public function supprimerarticleAction(Article $article,Request $request)
    {
        $form = $this->createDeleteForm($article);
        $form->handleRequest($request);
        $id=$article->getIdcateg();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();
        }

        return $this->redirectToRoute('afficherarticle',array('id'=>$id));
    }

    public function supprimerarticleboAction(Article $article,Request $request)
    {
        $id=$article->getId();
        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();


        return $this->redirectToRoute('afficherarticlebo',array('id'=>$id));
    }

    public function abonnerAction(Categorie $categorie)
    {
        $user=$this->getUser();
        $categorie->addAbo($user);
        $id=$categorie->getId();
        $current=$categorie->getNbrabo();
        $categorie->setNbrabo($current+1);
        $em=$this->getDoctrine()->getManager();
        $em->flush();

        return $this->redirectToRoute('afficherarticle',array('id'=>$id));
    }
    public function afficherarticleAction(Categorie $categorie)
    {

        $libele = $categorie->getLibelecategorie();
        $id = $categorie->getId();
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('BlogBundle:Article')->findBy(array('idcateg' => $id));
        $test=$categorie->getAbos();
        $test1=$test->contains($this->getUser());
        if ($test1){$test1=1;}
        else{$test1=0;}
        return $this->render('@Blog/Article/afficherarticle.html.twig', array(
            'articles' => $articles,
            'idcateg'=>$id,
            'libele' => $libele,
            'test'=>$test1,
        ));
    }

    public function afficherarticleboAction()
    {


        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('BlogBundle:Article')->findAll();
        $motscle=$em->getRepository('BlogBundle:Motscensure')->findAll();
        foreach ($motscle as &$value)
        {
            $mot=$value->getTextmot();
            $asupp=$em->getRepository('BlogBundle:Article')->findBy(array('titrearticle' => $mot));
            foreach ($asupp as &$value)
            if ($value != null)
            {
                $value->setIdcateg(null);
                $em->remove($value);
                $em->flush();
            }
        }

        return $this->render('@Blog/Article/afficherarticlebo.html.twig', array(
            'articles' => $articles,

        ));
    }

    public function afficherunarticleAction(Article $article)
    {
        $deleteForm = $this->createDeleteForm($article);
        $current=$article->getNbrvu();
        $idcateg = $article->getIdcateg();
        $idc=strval($idcateg);
        $actual=$current+1;
        $article->setNbrvu($actual);
        $em=$this->getDoctrine();
        $user=$em->getRepository('UserBundle:User')->find($article->getIduser());
        if ($actual == 500)
        {
            $this->sendmailvuAction($user);
            $user->setScore($user->getScore()+10);
        }
        $id=$article->getId();
        $em = $this->getDoctrine()->getManager();
        $comm=$em->getRepository('BlogBundle:Comment')->findBy(array('thread' => $id));
        $coms=count($comm);
        $article->setNbrcomment($coms);
        $em->persist($article);
        $em->flush();


        return $this->render('@Blog/Article/afficherunarticle.html.twig', array(
            'article' => $article,
            'delete_form' => $deleteForm->createView(),
            'idcateg' => $idc,
        ));
    }

    public function afficherunarticleboAction(Article $article)
    {
        $deleteForm = $this->createDeleteForm($article);
        $categid=$article->getIdcateg();
        $em=$this->getDoctrine()->getManager();
        $categ=$em->getRepository('BlogBundle:Categorie')->find($categid);
        return $this->render('@Blog/Article/afficherunarticlebo.html.twig', array(
            'article' => $article,
            'delete_form' => $deleteForm->createView(),
            'categ' => $categ,
        ));
    }

    public function modifierarticleAction(Request $request, Article $article)
    {
        $deleteForm = $this->createDeleteForm($article);
        $editForm = $this->createForm('BlogBundle\Form\ArticleType', $article);
        $editForm->handleRequest($request);
        $idcateg = $article->getIdcateg();
        $idc=strval($idcateg);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('afficherarticle', array('id' => $idcateg));
        }

        return $this->render('@Blog/Article/modifierarticle.html.twig', array(
            'article' => $article,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'idcateg' => $idc,
        ));
    }

    /**
     * Creates a form to delete a article entity.
     *
     * @param Article $article The article entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Article $article)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('supprimerarticle', array('id' => $article->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

    public function searchAction(Request $request)
    {

        $article= new Article();
        $form= $this->createForm(Article::class,$article);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $article= $this->getDoctrine()->getRepository(Question::class)
                ->findBy(array('tag'=>$article->getTag(),'titre'=>$article->getTitre()));
        }
        else{
            $ques= $this->getDoctrine()->getRepository(Question::class)
                ->findAll();
        }
        return $this->render('@Forum/gestion/search.html.twig', array(
            "form"=>$form->createView(),'ques'=>$ques
        ));
    }

}
