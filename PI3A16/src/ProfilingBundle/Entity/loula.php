<?php

namespace ProfilingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * loula
 *
 * @ORM\Table(name="loula")
 * @ORM\Entity(repositoryClass="ProfilingBundle\Repository\loulaRepository")
 */
class loula
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
     * @var int
     *
     * @ORM\Column(name="somestuff", type="integer", nullable=true)
     */
    private $somestuff;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    public function __construct($id)
    {
        $this->somestuff=$id;
    }

    /**
     * Set somestuff
     *
     * @param integer $somestuff
     *
     * @return loula
     */
    public function setSomestuff($somestuff)
    {
        $this->somestuff = $somestuff;

        return $this;
    }

    /**
     * Get somestuff
     *
     * @return integer
     */
    public function getSomestuff()
    {
        return $this->somestuff;
    }
}
