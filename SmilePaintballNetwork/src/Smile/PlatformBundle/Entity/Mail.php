<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 06-12-16
 * Time: 19:57
 */

namespace Smile\PlatformBundle\Entity;


use Smile\UserBundle\Entity\User;

class Mail
{
    private $sendingBlue;
    private $data;

    function __construct(User $destinationUser ,$sendingblue_api)
    {
        $this->sendingBlue = $sendingblue_api;
        $this->data = array( "to" => array($destinationUser->getEmail() => $destinationUser->getUsername()),
            "from" => array("team@smilepaintball.com","Smile Paintball Network"),
            "subject" => "You have a notification on Smile",
            "html" => "You have a notification on <a href='https://www.smilepaintball.com/'>SmilePaintball.com</a>",
            "attachment" => array(),
            "headers" => array("Content-Type"=> "text/html; charset=iso-8859-1","X-param1"=> "value1", "X-param2"=> "value2","X-Mailin-custom"=>"my custom value", "X-Mailin-IP"=> "102.102.1.2", "X-Mailin-Tag" => "My tag")
        );
    }

    public function sendMail()
    {
        return $this->sendingBlue->send_email($this->data);
    }

    public function postUpvoted(Post $post)
    {
        $this->data["subject"] = "Smile Paintball - Your post has been upvoted.";
        $this->data["html"] ="
            <H1>Smile Paintball Network</H1>
            <p>
                Your <a href='https://www.smilepaintball.com/platform/post/".$post->getId()."'>post</a> has been upvoted.
            </p>
        ";
    }
}