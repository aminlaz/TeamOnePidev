<?php

namespace ReservationBundle\Repository;

/**
 * ReservationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReservationRepository extends \Doctrine\ORM\EntityRepository
{
    public function myfindall($id){
        $dqlresult=$this->getEntityManager()
            ->createQuery("SELECT m FROM ReservationBundle:Reservation m WHERE m.id='$id'");
        return $dqlresult->getResult();
    }

    public function findDispo($id)
    {
        $dqlresult=$this->getEntityManager()
            ->createQuery("SELECT m FROM ReservationBundle:Reservation m WHERE m.event_id = '$id'");
        return $dqlresult->getResult();
    }
}