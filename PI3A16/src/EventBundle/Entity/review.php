<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * review
 *
 * @ORM\Table(name="review")
 * @ORM\Entity(repositoryClass="EventBundle\Repository\reviewRepository")
 */
class review
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
     *@ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="iduser", referencedColumnName="id")
     */

    private $iduser;

    /**
     *@ORM\ManyToOne(targetEntity="EventBundle\Entity\Event")
     * @ORM\JoinColumn(name="idevent", referencedColumnName="id")
     */

    private $idevent;


    /**
     * @var string
     *
     * @ORM\Column(name="reviewtext", type="string", length=255)
     */
    private $reviewtext;

    /**
     * @var int
     *
     * @ORM\Column(name="rate", type="integer")
     */
    private $rate;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set iduser
     *
     * @param string $iduser
     *
     * @return review
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return string
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set idevent
     *
     * @param string $idevent
     *
     * @return review
     */
    public function setIdevent($idevent)
    {
        $this->idevent = $idevent;

        return $this;
    }

    /**
     * Get idevent
     *
     * @return string
     */
    public function getIdevent()
    {
        return $this->idevent;
    }

    /**
     * Set reviewtext
     *
     * @param string $reviewtext
     *
     * @return review
     */
    public function setReviewtext($reviewtext)
    {
        $this->reviewtext = $reviewtext;

        return $this;
    }

    /**
     * Get reviewtext
     *
     * @return string
     */
    public function getReviewtext()
    {
        return $this->reviewtext;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     *
     * @return review
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return int
     */
    public function getRate()
    {
        return $this->rate;
    }
}
