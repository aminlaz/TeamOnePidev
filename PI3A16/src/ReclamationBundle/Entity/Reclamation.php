<?php

namespace ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity(repositoryClass="ReclamationBundle\Repository\ReclamationRepository")
 */
class Reclamation
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
     *@ORM\ManyToOne(targetEntity="TypeReclamation")
     *@ORM\JoinColumn(name="type_id",referencedColumnName="id")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=255)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var bool
     *
     * @ORM\Column(name="traite", type="boolean")
     */
    private $traite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateR", type="date")
     */
    private $dateR;

    /**
     * @var bool
     *
     * @ORM\Column(name="archive", type="boolean")
     */
    private $archive;

    /**
     * @var bool
     *
     * @ORM\Column(name="corbeille", type="boolean")
     */
    private $corbeille;


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
     * Set type
     *
     * @param TypeReclamation $type
     *
     * @return Reclamation
     */
    public function setType(TypeReclamation $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return TypeReclamation
     */
    public function getType()
    {
        return $this->type;
    }



    /**
     * Set sujet
     *
     * @param string $sujet
     *
     * @return Reclamation
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Reclamation
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set traite
     *
     * @param boolean $traite
     *
     * @return Reclamation
     */
    public function setTraite($traite)
    {
        $this->traite = $traite;

        return $this;
    }

    /**
     * Get traite
     *
     * @return bool
     */
    public function getTraite()
    {
        return $this->traite;
    }

    /**
     * Set dateR
     *
     * @param \DateTime $dateR
     *
     * @return Reclamation
     */
    public function setDateR($dateR)
    {
        $this->dateR = $dateR;

        return $this;
    }

    /**
     * Get dateR
     *
     * @return \DateTime
     */
    public function getDateR()
    {
        return $this->dateR;
    }

    /**
     * Set archive
     *
     * @param boolean $archive
     *
     * @return Reclamation
     */
    public function setArchive($archive)
    {
        $this->archive = $archive;

        return $this;
    }

    /**
     * Get archive
     *
     * @return bool
     */
    public function getArchive()
    {
        return $this->archive;
    }

    /**
     * Set corbeille
     *
     * @param boolean $corbeille
     *
     * @return Reclamation
     */
    public function setCorbeille($corbeille)
    {
        $this->corbeille = $corbeille;

        return $this;
    }

    /**
     * Get corbeille
     *
     * @return bool
     */
    public function getCorbeille()
    {
        return $this->corbeille;
    }
}

