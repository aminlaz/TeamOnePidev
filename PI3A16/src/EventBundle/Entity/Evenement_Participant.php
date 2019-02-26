<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement_Participant
 *
 * @ORM\Table(name="evenement__participant")
 * @ORM\Entity(repositoryClass="EventBundle\Repository\Evenement_ParticipantRepository")
 */
class Evenement_Participant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *@ORM\ManyToOne(targetEntity="\EventBundle\Entity\Event")
     * @ORM\JoinColumn(name="idEvent", referencedColumnName="id")
     */

    private $idEvent;

    /**
     *@ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="idParticipant", referencedColumnName="id")
     */

    private $idParticipant;

    /**
     * @return \UserBundle\Entity\User
     */
    public function getIdParticipant()
    {
        return $this->idParticipant;
    }

    /**
     *
     * @param \UserBundle\Entity\User $idParticipant
     *
     * @return Evenement_Participant
     */
    public function setIdParticipant($idParticipant)
    {
        $this->idParticipant = $idParticipant;
    }



    /**
     * @return \EventBundle\Entity\Event
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * @param \EventBundle\Entity\Event $idEvent
     */
    public function setIdEvent($idEvent)
    {
        $this->idEvent = $idEvent;
    }



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

