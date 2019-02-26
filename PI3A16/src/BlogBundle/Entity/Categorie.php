<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\CategorieRepository")
 */
class Categorie
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
     * @ORM\Column(name="libelecategorie", type="string", length=255)
     */
    private $libelecategorie;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrabo", type="integer")
     */
    private $nbrabo=0;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrvu", type="integer")
     */
    private $nbrvu=0;

    /**
     * @var string
     *
     * @ORM\Column(name="photocategorie", type="string", length=255, nullable=true)
     */
    private $photocategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="desccategorie", type="string", length=255)
     */
    private $desccategorie;


    /**
     * @ORM\ManyToMany(targetEntity="UserBundle\Entity\User", inversedBy="categorie")
     * @ORM\JoinTable(name="abocateg")
     */
    private $abos;

    /**
     * @ORM\ManyToOne(targetEntity="BlogBundle\Entity\Categorie")
     * @ORM\JoinColumn(name="subcateg_id", referencedColumnName="id", nullable=true)
     */
    private $idsubcateg;

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
     * Set libelecategorie
     *
     * @param string $libelecategorie
     *
     * @return Categorie
     */
    public function setLibelecategorie($libelecategorie)
    {
        $this->libelecategorie = $libelecategorie;

        return $this;
    }

    /**
     * Get libelecategorie
     *
     * @return string
     */
    public function getLibelecategorie()
    {
        return $this->libelecategorie;
    }

    /**
     * Set nbrabo
     *
     * @param integer $nbrabo
     *
     * @return Categorie
     */
    public function setNbrabo($nbrabo)
    {
        $this->nbrabo = $nbrabo;

        return $this;
    }

    /**
     * Get nbrabo
     *
     * @return int
     */
    public function getNbrabo()
    {
        return $this->nbrabo;
    }

    /**
     * Set idsubcateg
     *
     * @param integer $idsubcateg
     *
     * @return Categorie
     */
    public function setIdsubcateg($idsubcateg)
    {
        $this->nbrabo = $idsubcateg;

        return $this;
    }

    /**
     * Get idsubcateg
     *
     * @return int
     */
    public function getIdsubcateg()
    {
        return $this->idsubcateg;
    }

    /**
     * Set nbrvu
     *
     * @param integer $nbrvu
     *
     * @return Categorie
     */
    public function setNbrvu($nbrvu)
    {
        $this->nbrvu = $nbrvu;

        return $this;
    }

    /**
     * Get nbrvu
     *
     * @return int
     */
    public function getNbrvu()
    {
        return $this->nbrvu;
    }

    /**
     * Set photocategorie
     *
     * @param string $photocategorie
     *
     * @return Categorie
     */
    public function setPhotocategorie($photocategorie)
    {
        $this->photocategorie = $photocategorie;

        return $this;
    }

    /**
     * Get photocategorie
     *
     * @return string
     */
    public function getPhotocategorie()
    {
        return $this->photocategorie;
    }

    /**
     * Set desccategorie
     *
     * @param string $desccategorie
     *
     * @return Categorie
     */
    public function setDesccategorie($desccategorie)
    {
        $this->desccategorie = $desccategorie;

        return $this;
    }

    /**
     * Get desccategorie
     *
     * @return string
     */
    public function getDesccategorie()
    {
        return $this->desccategorie;
    }

    public function __toString()
    {
        return (string)$this->getId();
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->abos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add abo
     *
     * @param \UserBundle\Entity\User $abo
     *
     * @return Categorie
     */
    public function addAbo(\UserBundle\Entity\User $abo)
    {
        $this->abos[] = $abo;

        return $this;
    }

    /**
     * Remove abo
     *
     * @param \UserBundle\Entity\User $abo
     */
    public function removeAbo(\UserBundle\Entity\User $abo)
    {
        $this->abos->removeElement($abo);
    }

    /**
     * Get abos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAbos()
    {
        return $this->abos;
    }
}
