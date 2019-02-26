<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\ArticleRepository")
 */
class Article
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
     * @ORM\Column(name="titrearticle", type="string", length=255)
     */
    private $titrearticle;

    /**
     * @var string
     *
     * @ORM\Column(name="contenuarticle", type="text")
     */
    private $contenuarticle;

    /**
     * @var string
     *
     * @ORM\Column(name="videoarticle", type="string", length=255, nullable=true)
     */
    private $videoarticle;

    /**
     * @var string
     *
     * @ORM\Column(name="photoarticle", type="string", length=255, nullable=true)
     */
    private $photoarticle;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrlike", type="integer")
     */
    private $nbrlike=0;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrdislike", type="integer")
     */
    private $nbrdislike=0;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrvu", type="integer")
     */
    private $nbrvu=0;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrcomment", type="integer")
     */
    private $nbrcomment=0;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datearticle", type="datetime")
     */
    private $datearticle;

    /**
     * @ORM\ManyToOne(targetEntity="BlogBundle\Entity\Categorie", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="categ_id", referencedColumnName="id", nullable=true)
     */
    private $idcateg;


    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     */
    private $iduser;

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
     * Set titrearticle
     *
     * @param string $titrearticle
     *
     * @return Article
     */
    public function setTitrearticle($titrearticle)
    {
        $this->titrearticle = $titrearticle;

        return $this;
    }

    /**
     * Get titrearticle
     *
     * @return string
     */
    public function getTitrearticle()
    {
        return $this->titrearticle;
    }

    /**
     * Set contenuarticle
     *
     * @param string $contenuarticle
     *
     * @return Article
     */
    public function setContenuarticle($contenuarticle)
    {
        $this->contenuarticle = $contenuarticle;

        return $this;
    }

    /**
     * Get contenuarticle
     *
     * @return string
     */
    public function getContenuarticle()
    {
        return $this->contenuarticle;
    }

    /**
     * Set videoarticle
     *
     * @param string $videoarticle
     *
     * @return Article
     */
    public function setVideoarticle($videoarticle)
    {
        $this->videoarticle = $videoarticle;

        return $this;
    }

    /**
     * Get videoarticle
     *
     * @return string
     */
    public function getVideoarticle()
    {
        return $this->videoarticle;
    }

    /**
     * Set photoarticle
     *
     * @param string $photoarticle
     *
     * @return Article
     */
    public function setPhotoarticle($photoarticle)
    {
        $this->photoarticle = $photoarticle;

        return $this;
    }

    /**
     * Get photoarticle
     *
     * @return string
     */
    public function getPhotoarticle()
    {
        return $this->photoarticle;
    }

    /**
     * Set nbrlike
     *
     * @param integer $nbrlike
     *
     * @return Article
     */
    public function setNbrlike($nbrlike)
    {
        $this->nbrlike = $nbrlike;

        return $this;
    }

    /**
     * Get nbrlike
     *
     * @return int
     */
    public function getNbrlike()
    {
        return $this->nbrlike;
    }

    /**
     * Set idcateg
     *
     * @param integer $idcateg
     *
     * @return Article
     */
    public function setIdcateg($idcateg)
    {
        $this->idcateg = $idcateg;

        return $this;
    }

    /**
     * Get idcateg
     *
     * @return int
     */
    public function getIdcateg()
    {
        return $this->idcateg;
    }

    /**
     * Set iduser
     *
     * @param integer $iduser
     *
     * @return Article
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return int
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set nbrdislike
     *
     * @param integer $nbrdislike
     *
     * @return Article
     */
    public function setNbrdislike($nbrdislike)
    {
        $this->nbrdislike = $nbrdislike;

        return $this;
    }

    /**
     * Get nbrdislike
     *
     * @return int
     */
    public function getNbrdislike()
    {
        return $this->nbrdislike;
    }

    /**
     * Set nbrvu
     *
     * @param integer $nbrvu
     *
     * @return Article
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
     * Set nbrcomment
     *
     * @param integer $nbrcomment
     *
     * @return Article
     */
    public function setNbrcomment($nbrcomment)
    {
        $this->nbrcomment = $nbrcomment;

        return $this;
    }

    /**
     * Get nbrcomment
     *
     * @return int
     */
    public function getNbrcomment()
    {
        return $this->nbrcomment;
    }

    /**
     * Set datearticle
     *
     * @param \DateTime $datearticle
     *
     * @return Article
     */
    public function setDatearticle($datearticle)
    {
        $this->datearticle = $datearticle;

        return $this;
    }

    /**
     * Get datearticle
     *
     * @return \DateTime
     */
    public function getDatearticle()
    {
        return $this->datearticle;
    }

}
