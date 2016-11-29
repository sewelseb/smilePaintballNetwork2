<?php

namespace SkynetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacebookGroup
 *
 * @ORM\Table(name="facebook_group")
 * @ORM\Entity(repositoryClass="SkynetBundle\Repository\FacebookGroupRepository")
 */
class FacebookGroup
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
     * @ORM\Column(name="facebook_id", type="string", length=255)
     */
    private $facebookId;

    /**
     * @var string
     *
     * @ORM\Column(name="groupName", type="string", length=255)
     */
    private $groupName;

    /**
     * @var int
     *
     * @ORM\Column(name="timezone", type="integer", nullable=true)
     */
    private $timezone;

    /**
     * @var string
     *
     * @ORM\Column(name="accountForPosting", type="string", length=255)
     */
    private $accountForPosting;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255)
     */
    private $language;


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
     * Set facebookId
     *
     * @param string $facebookId
     *
     * @return FacebookGroup
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;

        return $this;
    }

    /**
     * Get facebookId
     *
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * Set groupName
     *
     * @param string $groupName
     *
     * @return FacebookGroup
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set timezone
     *
     * @param integer $timezone
     *
     * @return FacebookGroup
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return int
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set accountForPosting
     *
     * @param string $accountForPosting
     *
     * @return FacebookGroup
     */
    public function setAccountForPosting($accountForPosting)
    {
        $this->accountForPosting = $accountForPosting;

        return $this;
    }

    /**
     * Get accountForPosting
     *
     * @return string
     */
    public function getAccountForPosting()
    {
        return $this->accountForPosting;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return FacebookGroup
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }
}

