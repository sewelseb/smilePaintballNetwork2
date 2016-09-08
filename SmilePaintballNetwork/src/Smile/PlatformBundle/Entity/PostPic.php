<?php

namespace Smile\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * PostPic
 *
 * @ORM\Table(name="post_pic")
 * @ORM\Entity(repositoryClass="Smile\PlatformBundle\Repository\PostPicRepository")
 */
class PostPic
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
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255, nullable=true)
     */
    private $alt;

    /**
     * @Assert\File( maxSize = "3072k", mimeTypesMessage = "The max file size is 3M")
     */
    private $file;





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
     * Set url
     *
     * @param string $url
     *
     * @return PostPic
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return PostPic
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }


    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }


    public function getFile()
    {
        return $this->file;
    }
    public function upload(Post $post)
    {
        // Si jamais il n'y a pas de fichier (champ facultatif), on ne fait rien
        if (null === $this->file) {
            return;
        }

        //$extention = $this->getFile()->getClientOriginalName()->explode('.', $this->file->getClientOriginalName())[1];
        $extention = $this->getFile()->guessExtension();
        $name = $post->getUser()->getUsername().'_'.time().'.'.$extention;
        // On déplace le fichier envoyé dans le répertoire de notre choix
        $this->file->move($this->getUploadRootDir(), $name);
        // On sauvegarde le nom de fichier dans notre attribut $url
        $this->url = $name;
        // On crée également le futur attribut alt de notre balise <img>
        $this->alt = $name;

    }
    public function getUploadDir()
    {
        // On retourne le chemin relatif vers l'image pour un navigateur (relatif au répertoire /web donc)
        return '/uploads/postPics';
    }
    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
}

