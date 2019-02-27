<?php

namespace ReservationBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="ReservationBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;


    /**
     *@ORM\ManyToOne(targetEntity="Billet")
     *@ORM\JoinColumn(name="billet_id",referencedColumnName="id")
     */
    private $billet_id;

    /**
     *@ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     *@ORM\JoinColumn(name="user_id",referencedColumnName="id")
     */
    private $user_id;

    /**
     *@ORM\ManyToOne(targetEntity="EventBundle\Entity\Event")
     *@ORM\JoinColumn(name="event_id",referencedColumnName="id")
     */
    private $event_id;

    /**
     * @return mixed
     */
    public function getEvent_id()
    {
        return $this->event_id;
    }

    /**
     * @param mixed $event_id
     */
    public function setEvent_id($event_id)
    {
        $this->event_id = $event_id;
    }




    /**
     * @return mixed
     */
    public function getBilletId()
    {
        return $this->billet_id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @param mixed $billet_id
     */
    public function setBilletId($billet_id)
    {
        $this->billet_id = $billet_id;
    }





    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Reservation
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Reservation
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Reservation
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }
}

