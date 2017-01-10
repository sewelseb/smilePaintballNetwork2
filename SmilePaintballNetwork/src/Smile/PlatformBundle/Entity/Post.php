<?php

namespace Smile\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Smile\PlatformBundle\Entity\PostPic;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="Smile\PlatformBundle\Repository\PostRepository")
 * @
 */
class Post
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
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Smile\PlatformBundle\Entity\Team")
     * @ORM\JoinColumn(nullable=true)
     */
    private $team;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="upvotes", type="integer", nullable=true)
     */
    private $upvotes=0;
    /**
     * @var integer
     *
     * @ORM\Column(name="downvotes", type="integer", nullable=true)
     */
    private $downvotes=0;

    /**
     * @var integer
     *
     * @ORM\Column(name="comments", type="integer", nullable=true)
     */
    private $comments=0;

    /**
     * @var string
     *
     * @ORM\Column(name="event_name", type="string", length=255, nullable=true)
     */
    private $eventName;

    /**
     * @var integer
     *
     * @ORM\Column(name="creationTime", type="bigint", nullable=true)
     */
    private $creationTime;

    /**
     * @ORM\OneToOne(targetEntity="Smile\PlatformBundle\Entity\PostPic",cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="external_url", type="string", length=255, nullable=true)
     */
    private $nullable;

    /**
     * @var string
     *
     * @ORM\Column(name="thumbnails", type="string", length=255, nullable=true)
     */
    private $thumbnails;

    /**
     * @var boolean
     *
     * @ORM\Column(name="first_view", type="boolean", nullable=true)
     */
    private $firstView=false;

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="bigint", nullable=true)
     */
    private $views=0;

    /**
    * @var boolean
    *
    * @ORM\Column(name="is_event", type="boolean", nullable=true)
    */
    private $isEvent = false;

    /**
     * @ORM\OneToOne(targetEntity="Smile\PlatformBundle\Entity\Event")
     * @ORM\JoinColumn(nullable=true)
     */
    private $event;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_new_team_pic", type="boolean", nullable=true)
     */
    private $isNewTeamPic  =false;


    /**
     * @ORM\OneToOne(targetEntity="Smile\UserBundle\Entity\teamPicture",cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $teamPic;




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
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getUpvotes()
    {
        return $this->upvotes;
    }

    /**
     * @param int $upvotes
     */
    public function setUpvotes($upvotes)
    {
        $this->upvotes = $upvotes;
    }

    /**
     * @return int
     */
    public function getDownvotes()
    {
        return $this->downvotes;
    }

    /**
     * @param int $downvotes
     */
    public function setDownvotes($downvotes)
    {
        $this->downvotes = $downvotes;
    }

    /**
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * @param string $eventName
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
    }

    /**
     * @return int
     */
    public function getCreationTime()
    {
        return $this->creationTime;
    }

    /**
     * @param int $creationTime
     */
    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        if ($this->isNewTeamPic)
        {
            return $this->teamPic;
        }
        else
        {
            return $this->picture;
        }
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getNullable()
    {
        return $this->nullable;
    }

    /**
     * @param string $nullable
     */
    public function setNullable($nullable)
    {
        $this->nullable = $nullable;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return int
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param int $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return string
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
    }

    /**
     * @param string $thumbnails
     */
    public function setThumbnails($thumbnails)
    {
        $this->thumbnails = $thumbnails;
    }

    public function getThumbnailsWithoutSlash()
    {
        return substr($this->thumbnails, 1);
    }



    public function getYoutubeId()
    {
        $tab = explode("/embed/", $this->getUrl());
        //return $matches[1];
        if (isset ($tab[1]))
        {
            return $tab[1];
        }
        else
        {
            return null;
        }

    }

    public function getFacebookId()
    {

            $tmp = explode('/', $this->getUrl());
            if (count($tmp) - 2>=0)
            {
                if (strtolower($tmp[count($tmp) - 2] == 'videos'))
                    return $tmp[count($tmp) - 1];
            }

            if (isset(parse_url($this->getUrl())['query']))
            {
                parse_str(parse_url($this->getUrl())['query'], $query);
                if (!empty($query['v']))
                    return $query['v'];
            }
            $tab =array();
            $i=0;
            foreach($tmp as $itt)
            {
                if (is_numeric($itt) && intval($itt)>1000)
                {
                    $tab[$i] = $itt;
                    $i++;
                }
            }
            if($i>0)
            {
                //return 'test';
                return $tab[count($tab)-1];
            }

        return null;

    }

    /**
     * @return mixed
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @param mixed $team
     */
    public function setTeam($team)
    {
        $this->team = $team;
    }

    /**
     * @return boolean
     */
    public function getFirstView()
    {
        return $this->firstView;
    }

    /**
     * @param boolean $firstView
     */
    public function setFirstView($firstView)
    {
        $this->firstView = $firstView;
    }

    /**
     * @return int
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * @param int $views
     */
    public function setViews($views)
    {
        $this->views = $views;
    }

    /**
     * @return bool
     */
    public function isIsEvent()
    {
        return $this->isEvent;
    }

    /**
     * @param bool $isEvent
     */
    public function setIsEvent($isEvent)
    {
        $this->isEvent = $isEvent;
    }

    /**
     * @return mixed
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param mixed $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }


    public function isIsNewTeamPic()
    {
        return $this->isNewTeamPic;
    }

    /**
     * @param bool $isNewTeamPic
     */
    public function setIsNewTeamPic($isNewTeamPic)
    {
        $this->isNewTeamPic = $isNewTeamPic;
    }



    /**
     * @param mixed $teamPic
     */
    public function setTeamPic($teamPic)
    {
        $this->teamPic = $teamPic;

    }

    public function getTeamPic()
    {
        return $this->teamPic;
    }



}

