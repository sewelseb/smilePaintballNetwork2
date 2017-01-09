<?php

namespace Smile\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Backup
 *
 * @ORM\Table(name="backup")
 * @ORM\Entity(repositoryClass="Smile\PlatformBundle\Repository\BackupRepository")
 */
class Backup
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
     * @ORM\Column(name="entityType", type="string", length=255)
     */
    private $entityType;

    /**
     * @var string
     *
     * @ORM\Column(name="enityJson", type="string", length=2048)
     */
    private $enityJson;

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="bigint")
     */
    private $time;


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
     * Set entityType
     *
     * @param string $entityType
     *
     * @return Backup
     */
    public function setEntityType($entityType)
    {
        $this->entityType = $entityType;

        return $this;
    }

    /**
     * Get entityType
     *
     * @return string
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * Set enityJson
     *
     * @param string $enityJson
     *
     * @return Backup
     */
    public function setEnityJson($enityJson)
    {
        $this->enityJson = $enityJson;

        return $this;
    }

    /**
     * Get enityJson
     *
     * @return string
     */
    public function getEnityJson()
    {
        return $this->enityJson;
    }

    /**
     * Set time
     *
     * @param integer $time
     *
     * @return Backup
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }
}

