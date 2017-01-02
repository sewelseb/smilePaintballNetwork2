<?php

namespace Smile\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Smile\PlatformBundle\Form\EventProfilePicType;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * EventProfilePic
 *
 * @ORM\Table(name="event_profile_pic")
 * @ORM\Entity(repositoryClass="Smile\PlatformBundle\Repository\EventProfilePicRepository")
 */
class EventProfilePic
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
    public function upload(Event $event, $container)
    {
        // Si jamais il n'y a pas de fichier (champ facultatif), on ne fait rien
        if (null === $this->file) {
            return;
        }

        //$extention = $this->getFile()->getClientOriginalName()->explode('.', $this->file->getClientOriginalName())[1];
        $extention = $this->getFile()->guessExtension();
        $name = $event->getUser()->getUsername().'_'.time().'.'.$extention;
        $name = str_replace(" ", "", $name);
        $name = str_replace("'", "", $name);
        $name = str_replace("/", "", $name);
        $name = str_replace("\"", "", $name);
        $name = str_replace("é", "e", $name);
        $name = str_replace("è", "e", $name);
        $name = str_replace("ê", "e", $name);
        $name = urlencode($name);
        $fs = new Filesystem();
        if($fs->exists($this->file))
        {
            // On déplace le fichier envoyé dans le répertoire de notre choix
            $this->file->move($this->getUploadDir(), $name);
            //on redimentionne le fichier
            $dataManager = $container->get('liip_imagine.data.manager');    // the data manager service
            $filterManager = $container->get('liip_imagine.filter.manager');// the filter manager service
            $dataManager = $container->get('liip_imagine.data.manager');    // the data manager service
            $image = $dataManager->find('profile_pic', $this->getUploadDir().'/'.$name);



            $thumb = $container->get('liip_imagine.filter.manager')->applyFilter($image, 'profile_pic')->getContent();
            $f = fopen($this->getUploadDir().'/'.$name, 'w');// create thumbnail file
            //dump($this->getUploadDir().'/'.$name);
            fwrite($f, $thumb);                                             // write the thumbnail
            fclose($f);
            // On sauvegarde le nom de fichier dans notre attribut $url
            $this->url = $name;
            // On crée également le futur attribut alt de notre balise <img>
            $this->alt = $name;
        }
        else
        {
            $this->url = null;

            $this->alt = null;
        }


    }
    public function getUploadDir()
    {
        // On retourne le chemin relatif vers l'image pour un navigateur (relatif au répertoire /web donc)
        return 'uploads/eventPics';
    }
    protected function getUploadRootDir()
    {
        return 'web/'.$this->getUploadDir();
    }
}

