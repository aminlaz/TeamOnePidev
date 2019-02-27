<?php

namespace ReservationBundle\Controller;
use ReservationBundle\Entity\Reservation;
use ReservationBundle\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;

/**
 * Reservation controller.
 *
 */
class ReservationController extends Controller
{

    public function sendmailAction()
    {
    $message = \Swift_Message::newInstance()->setSubject("Reservation")->setFrom("hosni.ayachi.98@gmail.com")
    ->setTo("hosni.ayachi.98@gmail.com")
    ->setBody("Une reservation a été effectuée");
    $this->get('mailer')->send($message);
    }



    /**
     * Lists all reservation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reservations = $em->getRepository('ReservationBundle:Reservation')->findAll();

        return $this->render('@Reservation/Reservation/index.html.twig', array(
            'reservations' => $reservations,
        ));
    }

    /**
     * Creates a new reservation entity.
     *
     */
    public function newAction(Request $request)
    {
        $reservation = new Reservation();
        $form = $this->createForm('ReservationBundle\Form\ReservationType', $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();
           $this->sendmailAction();
            return $this->redirectToRoute('reservation_show', array('id' => $reservation->getId()));
        }

        return $this->render('@Reservation/Reservation/new.html.twig', array(
            'reservation' => $reservation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reservation entity.
     *
     */
    public function showAction(Reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);

        return $this->render('@Reservation/Reservation/show.html.twig', array(
            'reservation' => $reservation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reservation entity.
     *
     */
    public function editAction(Request $request, Reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);
        $editForm = $this->createForm('ReservationBundle\Form\ReservationType', $reservation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservation_edit', array('id' => $reservation->getId()));
        }

        return $this->render('@Reservation/Reservation/edit.html.twig', array(
            'reservation' => $reservation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reservation entity.
     *
     */
    public function deleteAction(Request $request, Reservation $reservation)
    {
        $form = $this->createDeleteForm($reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reservation);
            $em->flush();
        }

        return $this->redirectToRoute('reservation_index');
    }

    /**
     * Creates a form to delete a reservation entity.
     *
     * @param Reservation $reservation The reservation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reservation $reservation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reservation_delete', array('id' => $reservation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function calculDispoAction($id,Request $request)
    {
        // Réccuperer la liste des event //
        $Liste = $this->getDoctrine()->getEntityManager();
        $nbplace = $this->getDoctrine()->getRepository(Reservation::class)->findBy($id);
        return $this->render('@Reservation/Reservation/disponibilite.html.twig',array('nbplace' =>$nbplace));

    }

    public function rechercheAction(Request $request)
    {
        $reservation =new Reservation();
        $id=$request->get('id');
        if(isset($id)){
            $reservation=$this->getDoctrine()
                ->getRepository(Reservation::class)
                ->myfindAll($id);
            return $this->render('@Reservation/Reservation/recherche.html.twig',array('reservations' => $reservation,));


        }
        return $this->render('@Reservation/Reservation/recherche.html.twig',array('reservations' => $reservation,));
    }

    public function GrapheAction()
    {
        $pieChart = new PieChart();
        $em= $this->getDoctrine();
        $classes = $em->getRepository(Reservation::class)->findAll();
        $totalEtudiant=0;
        foreach($classes as $classe){
         $totalEtudiant=$totalEtudiant+$classe->getId();
        }
        $data= array();
        $stat=['Evenement', 'nbEVents'];
        $nb=0;
        array_push($data,$stat);
        foreach($classes as $classe) {
            $stat=array();
            array_push($stat,$classe->getPhone(),(($classe->getId()) *100)/$totalEtudiant);
            $nb=($classe->getId() *100)/$totalEtudiant;
            $stat=[$classe->getPhone(),$nb];
            array_push($data,$stat);}
        $pieChart->getData()->setArrayToDataTable( $data );
        $pieChart->getOptions()->setTitle('Pourcentages des étudiants par niveau');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);
        return $this->render('@Reservation\reservation\stat.html.twig', array('piechart' => $pieChart));
    }
}
