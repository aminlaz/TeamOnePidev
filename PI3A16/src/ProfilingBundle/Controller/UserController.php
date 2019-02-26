<?php

namespace ProfilingBundle\Controller;

use ProfilingBundle\Entity\Badge;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;


class UserController extends Controller
{
    public function visualiserUserAction()

    {
        $pieChart = new PieChart();
        $em= $this->getDoctrine();
        $totalUser=$em->getRepository(User::class)->NombreDesUser();
        $inactifs=($em->getRepository(User::class)->NombreDesUtilisateurInactifs()*100)/$totalUser;
        $peuactifs=($em->getRepository(User::class)->NombreDesUtilisateurPeuActifs()*100)/$totalUser;
        $actifs=($em->getRepository(User::class)->NombreDesUtilisateurActifs()*100)/$totalUser;
        $tresactifs=($em->getRepository(User::class)->NombreDesUtilisateurTresActifs()*100)/$totalUser;

        $pieChart->getData()->setArrayToDataTable(
            [['etat user', 'etat'],
                ['Inactifs',     $inactifs],
                ['Peu actifs',      $peuactifs],
                ['Actifs',  $actifs],
                ['Tres actifs',  $tresactifs],

            ]

        );
        $pieChart->getOptions()->setTitle('Répartition des utilisateurs selon le score');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);


        return $this->render('@Profiling\User\visualiser_user.html.twig', array(
            'piechart' => $pieChart,
        ));
    }


    public function visualiserUserBadgeAction()

    {
        $pieChart1 = new PieChart();
        $em= $this->getDoctrine();
        $totalUser=$em->getRepository(User::class)->NombreDesUser();
        $badge=($em->getRepository(User::class)->NombreDesUtilisateurBadge()*100)/$totalUser;
        $nonbadge=($em->getRepository(User::class)->NombreDesUtilisateurNonBadge()*100)/$totalUser;

        $pieChart1->getData()->setArrayToDataTable(
            [['etat user', 'etat'],
                ['Avec badge',     $badge],
                ['Sans badge',      $nonbadge],


            ]

        );
        $pieChart1->getOptions()->setTitle('Répartition de la possession des badges ');
        $pieChart1->getOptions()->setHeight(500);
        $pieChart1->getOptions()->setWidth(900);
        $pieChart1->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart1->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart1->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart1->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart1->getOptions()->getTitleTextStyle()->setFontSize(20);


        return $this->render('@Profiling\User\visualiser_user_badge.html.twig', array(
            'piechart1' => $pieChart1,
        ));
    }




}
