<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Motscensure
 *
 * @ORM\Table(name="motscensure")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\MotscensureRepository")
 */
class Motscensure
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
     * @ORM\Column(name="textmot", type="string", length=255)
     */
    private $textmot;

    /**
     * @var int
     *
     * @ORM\Column(name="gravitemot", type="integer")
     */
    private $gravitemot;


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
     * Set textmot
     *
     * @param string $textmot
     *
     * @return Motscensure
     */
    public function setTextmot($textmot)
    {
        $this->textmot = $textmot;

        return $this;
    }

    /**
     * Get textmot
     *
     * @return string
     */
    public function getTextmot()
    {
        return $this->textmot;
    }

    /**
     * Set gravitemot
     *
     * @param integer $gravitemot
     *
     * @return Motscensure
     */
    public function setGravitemot($gravitemot)
    {
        $this->gravitemot = $gravitemot;

        return $this;
    }

    /**
     * Get gravitemot
     *
     * @return int
     */
    public function getGravitemot()
    {
        return $this->gravitemot;
    }
}
