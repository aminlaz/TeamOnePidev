<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reviewlike
 *
 * @ORM\Table(name="reviewlike")
 * @ORM\Entity(repositoryClass="EventBundle\Repository\reviewlikeRepository")
 */
class reviewlike
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
     *@ORM\ManyToOne(targetEntity="EventBundle\Entity\review")
     * @ORM\JoinColumn(name="idreview", referencedColumnName="id")
     */

    private $idreview;
    /**
     *@ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="iduser", referencedColumnName="id")
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
     * Set idreview
     *
     * @param \EventBundle\Entity\review $idreview
     *
     * @return reviewlike
     */
    public function setIdreview(\EventBundle\Entity\review $idreview = null)
    {
        $this->idreview = $idreview;

        return $this;
    }

    /**
     * Get idreview
     *
     * @return \EventBundle\Entity\review
     */
    public function getIdreview()
    {
        return $this->idreview;
    }

    /**
     * Set iduser
     *
     * @param \UserBundle\Entity\User $iduser
     *
     * @return reviewlike
     */
    public function setIduser(\UserBundle\Entity\User $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \UserBundle\Entity\User
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}
