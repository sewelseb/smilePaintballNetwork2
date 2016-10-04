<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 04-10-16
 * Time: 23:01
 */

namespace Smile\PlatformBundle\Entity;


class downloadedPicture
{
    private $folder;
    private $url;
    private $file;
    private $filename;

    public function __construct($url)
    {
        $this->url = $url;
        $this->file = file_get_contents($this->url);
    }

    public function saveImage()
    {
        $insert = file_put_contents($this->folder.$this->filename, $this->file);
        if (!$insert) {
            throw new \Exception('Failed to write image');
        }
    }
}