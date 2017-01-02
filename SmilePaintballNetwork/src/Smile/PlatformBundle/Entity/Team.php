<?php

namespace Smile\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Team
 *
 * @ORM\Table(name="team")
 * @ORM\Entity(repositoryClass="Smile\PlatformBundle\Repository\TeamRepository")
 */
class Team
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
     * @ORM\ManyToOne(targetEntity="Smile\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $admin;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity="Smile\UserBundle\Entity\teamPicture",cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $teamPicture;

    /**
     * Many Groups have Many Users.
     * @ORM\ManyToMany(targetEntity="Event", mappedBy="teamComing")
     */
    private $eventAttending;

    public function __construct()
    {
        $this->eventAttending = new ArrayCollection();
    }


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
     * Set name
     *
     * @param string $name
     *
     * @return Team
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getTeamPicture()
    {
        return $this->teamPicture;
    }

    /**
     * @param mixed $teamPicture
     */
    public function setTeamPicture($teamPicture)
    {
        $this->teamPicture = $teamPicture;
    }

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }

    /**
     * @return mixed
     */
    public function getEventAttending()
    {
        return $this->eventAttending;
    }

    /**
     * @param mixed $eventAttending
     */
    public function setEventAttending($eventAttending)
    {
        $this->eventAttending = $eventAttending;
    }


}

