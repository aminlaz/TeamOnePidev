<?php

namespace CommunicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponses
 *
 * @ORM\Table(name="reponses")
 * @ORM\Entity(repositoryClass="CommunicationBundle\Repository\ReponsesRepository")
 */
class Reponses
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
     * @var string
     *
     * @ORM\Column(name="Texte", type="string", length=2000)
     */
    private $texte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="upvotes", type="integer", nullable=true)
     */
    private $upvotes;

    /**
     * @var int
     *
     * @ORM\Column(name="downvotes", type="integer", nullable=true)
     */
    private $downvotes;


    /**
     * @ORM\ManyToOne(targetEntity="CommunicationBundle\Entity\Questions")
     * @ORM\JoinColumn(name="id_question", referencedColumnName="id")
     */
    private $id_question;


    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $idUser;

    /**
     * @ORM\ManyToOne(targetEntity="CommunicationBundle\Entity\Reponses")
     * @ORM\JoinColumn(name="sousreponse_id", referencedColumnName="id")
     */
    private $idRep;

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
     * Set texte
     *
     * @param string $texte
     *
     * @return Reponses
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Reponses
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
     * Set upvotes
     *
     * @param integer $upvotes
     *
     * @return Reponses
     */
    public function setUpvotes($upvotes)
    {
        $this->upvotes = $upvotes;

        return $this;
    }

    /**
     * Get upvotes
     *
     * @return int
     */
    public function getUpvotes()
    {
        return $this->upvotes;
    }

    /**
     * Set downvotes
     *
     * @param integer $downvotes
     *
     * @return Reponses
     */
    public function setDownvotes($downvotes)
    {
        $this->downvotes = $downvotes;

        return $this;
    }

    /**
     * Get downvotes
     *
     * @return int
     */
    public function getDownvotes()
    {
        return $this->downvotes;
    }

    /**
     * Set IdRep
     *
     * @param integer $IdRep
     *
     * @return Reponses
     */
    public function setIdRep($IdRep)
    {
        $this->IdRep = $IdRep;

        return $this;
    }

    /**
     * Get IdRep
     *
     * @return int
     */
    public function getIdRep()
    {
        return $this->idRep;
    }

    /**
     * Set idQuestion
     *
     * @param \CommunicationBundle\Entity\Questions $idQuestion
     *
     * @return Reponses
     */
    public function setIdQuestion(\CommunicationBundle\Entity\Questions $idQuestion = null)
    {
        $this->id_question = $idQuestion;

        return $this;
    }

    /**
     * Get idQuestion
     *
     * @return \CommunicationBundle\Entity\Questions
     */
    public function getIdQuestion()
    {
        return $this->id_question;
    }

    /**
     * Set idUser
     *
     * @param \UserBundle\Entity\User $idUser
     *
     * @return Reponses
     */
    public function setIdUser(\UserBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \UserBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
