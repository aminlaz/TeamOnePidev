<?php



namespace ReclamationBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use NotificationBundle\Entity\Notification;
use SBC\NotificationsBundle\Builder\NotificationBuilder;
use SBC\NotificationsBundle\Model\NotifiableInterface;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity(repositoryClass="ReclamationBundle\Repository\ReclamationRepository")
 */
class Reclamation implements NotifiableInterface , \JsonSerializable
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
     *@ORM\ManyToOne(targetEntity="\EventBundle\Entity\Event")
     *@ORM\JoinColumn(name="event_id",referencedColumnName="id")
     */
    private $event;

    /**
     *@ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     *@ORM\JoinColumn(name="organisateur_id",referencedColumnName="id")
     */
    private $organisateur;

    /**
     *@ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     *@ORM\JoinColumn(name="user_id",referencedColumnName="id")
     */
    private $user;

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
     * @var \DateTime
     *
     * @ORM\Column(name="dateArchive", type="date",nullable=true)
     */
    private $dateArchive;

    /**
     * @var bool
     *
     * @ORM\Column(name="corbeille", type="boolean")
     */
    private $corbeille;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCorbeille", type="date",nullable=true)
     */
    private $dateCorbeille;


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
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }



    /**
     * Get event
     *
     * @return \EventBundle\Entity\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set event
     *
     * @param \EventBundle\Entity\Event $event
     *
     * @return Reclamation
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

    /**
     * Get organisateur
     *
     * @return \UserBundle\Entity\User
     */
    public function getOrganisateur()
    {
        return $this->organisateur;
    }

    /**
     * Set organisateur
     *
     * @param \UserBundle\Entity\User $organisateur
     *
     * @return Reclamation
     */
    public function setOrganisateur($organisateur )
    {
        $this->organisateur = $organisateur;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Reclamation
     */
    public function setUser($user )
    {
        $this->user = $user;
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

    /**
     * @return \DateTime
     */
    public function getDateArchive()
    {
        return $this->dateArchive;
    }

    /**
     * @param \DateTime $dateArchive
     */
    public function setDateArchive($dateArchive)
    {
        $this->dateArchive = $dateArchive;
    }

    /**
     * @return \DateTime
     */
    public function getDateCorbeille()
    {
        return $this->dateCorbeille;
    }

    /**
     * @param \DateTime $dateCorbeille
     */
    public function setDateCorbeille($dateCorbeille)
    {
        $this->dateCorbeille = $dateCorbeille;
    }





    /**
     * Build notifications on entity creation
     * @param NotificationBuilder $builder
     * @return NotificationBuilder
     */
    public function notificationsOnCreate(NotificationBuilder $builder)
    {
        $notification = new Notification();
        $notification
           // ->setIcon($this->getUser()->getName())
            ->setTitle('New Reclamation')
            ->setDescription('"'.$this->sujet.'" has been created')
            ->setRoute('reclamation_index')
            ->setParameters(array('id' => $this->id))
        ;
        $builder->addNotification($notification);

        return $builder;
    }

    /**
     * Build notifications on entity update
     * @param NotificationBuilder $builder
     * @return NotificationBuilder
     */
    public function notificationsOnUpdate(NotificationBuilder $builder)
    {
        $notification = new Notification();
        $notification
            ->setTitle('edit Reclamation')
            ->setDescription('"'.$this->contenu.'" has been created')
            ->setRoute('reclamation_new')
            ->setParameters(array('id' => $this->id))
        ;
        $builder->addNotification($notification);

        return $builder;
    }

    /**
     * Build notifications on entity delete
     * @param NotificationBuilder $builder
     * @return NotificationBuilder
     */
    public function notificationsOnDelete(NotificationBuilder $builder)
    {
        // in case you don't want any notification for a special event
        // you can simply return an empty $builder
        return $builder;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

