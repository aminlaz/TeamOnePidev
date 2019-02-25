<?php

namespace EventBundle\Controller;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Histogram;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use EventBundle\Entity\Event;
use EventBundle\Entity\eventtype;
use EventBundle\Entity\review;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * Event controller.
 *
 */
class EventController extends Controller
{
    /**
     * Lists all event entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($this->isGranted('IS_AUTHENTICATED_FULLY')) {
            $myevents = $em->getRepository('EventBundle:Event')
                ->findBy(['idorganisateur' => $this->getUser()->getId()]);
            $reservedF = 0;
            $capcityF = 0;
            $reservedP = 0;
            $capcityP = 0;
            $reserved = 0;
            $capcity = 0;
            foreach ($myevents as $myevent) {
                if($myevent->getFree())
                {
                    $reservedF = $reservedF + $myevent->getReserved();
                    $capcityF = $capcityF + $myevent->getCapacity();
                }
                else{
                    $reservedP = $reservedP + $myevent->getReserved();
                    $capcityP = $capcityP + $myevent->getCapacity();
                }
                $reserved = $reserved + $myevent->getReserved();
                $capcity = $capcity + $myevent->getCapacity();
            }

            $bar = new BarChart();
            $bar->getData()->setArrayToDataTable([
                ['type', 'places reservées', 'places disponible'],
                ['gratuit', $reservedF , $capcityF-$reservedF ],
                ['payant', $reservedP, $capcityP-$reservedP]

            ]);
            $bar->getOptions()->setOrientation("horizontal");
            $bar->getOptions()->setTitle('Reservations par type');
            $bar->getOptions()->getHAxis()->setTitle('Type');
            $bar->getOptions()->getHAxis()->setMinValue(0);
            $bar->getOptions()->getVAxis()->setTitle('Reservation');
            $bar->getOptions()->setWidth(900);
            $bar->getOptions()->setHeight(500);
            $bar->getOptions()->getTitleTextStyle()->setBold(true);
            $bar->getOptions()->getTitleTextStyle()->setColor('#009900');
            $bar->getOptions()->getTitleTextStyle()->setItalic(true);
            $bar->getOptions()->getTitleTextStyle()->setFontName('Arial');
            $bar->getOptions()->getTitleTextStyle()->setFontSize(20);

            $pieChart = new PieChart();
            $pieChart->getData()->setArrayToDataTable(
                [['Task', 'Hours per Day'],
                    ['Reservé', $reserved],
                    ['Disponible', ($capcity - $reserved)]
                ]
            );

            $pieChart->getOptions()->setTitle('Total des reservations de tout mes événement');
            $pieChart->getOptions()->setHeight(500);
            $pieChart->getOptions()->setWidth(900);
            $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
            $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
            $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
            $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
            $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);
            $pieChart->getOptions()->getPieSliceTextStyle()->setColor('#1e1e1e');


        }


        //$events = $em->getRepository('EventBundle:Event')->findAll();
        $queryBuilder = $em->getRepository('EventBundle:Event')->createFindAllQuery();

        if ($request->query->getAlnum('filter')) {
            $queryBuilder
                ->where('E.name LIKE :search OR E.description LIKE :search')
                ->setParameter('search', '%' . $request->query->getAlnum('filter') . '%');
        }
        if ($request->query->getAlnum('free')) {
            $queryBuilder
                ->Andwhere('E.free = 1');
        }
        if ($request->query->getAlnum('pascomplet')) {
            $queryBuilder
                ->Andwhere('E.reserved < E.capacity');
        }
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */

        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $queryBuilder->getQuery(),
            $request->query->getInt('page', 1),
            3
        );

        return $this->render('@Event/event/index.html.twig', array(
            'histogram' => $bar,
            'piechart' => $pieChart,
            'events' => $result,
        ));
    }

    /**
     * Creates a new event entity.
     *
     */
    public function newAction(Request $request)
    {
        $event = new Event();
        $form = $this->createForm('EventBundle\Form\EventType', $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            $event->setIdorganisateur($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute('events_show', array('id' => $event->getId()));
        }

        return $this->render('@Event/event/new.html.twig', array(
            'event' => $event,
            'form' => $form->createView(),

        ));
    }

    /**
     * Finds and displays a event entity.
     *
     */
    public function showAction(Request $request, Event $event)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $reviews = $em->getRepository('EventBundle:review')
            ->findBy(['idevent' => $event->getId()]);
        if ($this->isGranted('IS_AUTHENTICATED_FULLY')) {
            $myreview = $em->getRepository('EventBundle:review')
                ->findOneBy(['idevent' => $event->getId(), 'iduser' => $user->getId()]);
        } else {
            $myreview = null;
        }
        $review = new review();
        if (($request->isMethod('POST'))) {
            $review->setIduser($user);
            $review->setIdevent($event);
            $review->setRate($request->get('reviewrate'));
            $review->setReviewtext($request->get('reviewtext'));
            $em->persist($review);
            $em->flush();
            return $this->redirectToRoute('events_show', array('id' => $event->getId()));
        }

        $avg = $em->getRepository(review::class)->mRate($event);
        return $this->render('@Event/event/show.html.twig', array(
            'reviews' => $reviews,
            'event' => $event,
            'myreview' => $myreview,
            'avgrate' => $avg

        ));

    }

    /**
     * Displays a form to edit an existing event entity.
     *
     */
    public function editAction(Request $request, Event $event)
    {

        $editForm = $this->createForm('EventBundle\Form\EventType', $event);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('events_edit', array('id' => $event->getId()));
        }

        return $this->render('@Event/event/edit.html.twig', array(
            'event' => $event,
            'edit_form' => $editForm->createView(),

        ));
    }

    /**
     * Deletes a event entity.
     *
     */
    public function deleteAction(Event $event)
    {

        $em = $this->getDoctrine()->getManager();

        if (!$event) {
            throw $this->createNotFoundException('Unable to find Preisliste entity.');
        }

        $em->remove($event);
        $em->flush();


        return $this->redirectToRoute('events_index');
    }

    public function deleteReviewAction(review $review, Event $event)
    {

        $em = $this->getDoctrine()->getManager();

        if (!$review) {
            throw $this->createNotFoundException('Unable to find Preisliste entity.');
        }
        if ($review->getIduser() == $this->getUser()) {
            $em->remove($review);
            $em->flush();
        }
        return $this->redirectToRoute('events_show', array('id' => $event->getId()));
    }

}
