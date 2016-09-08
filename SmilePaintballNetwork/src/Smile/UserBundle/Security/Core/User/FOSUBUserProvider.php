<?php
namespace Smile\UserBundle\Security\Core\User;

use Smile\UserBundle\Entity\ProfilePic;
use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\FOSUBUserProvider as BaseClass;
use Symfony\Component\Security\Core\User\UserInterface;

class FOSUBUserProvider extends BaseClass
{


    /**
     * {@inheritDoc}
     */
    public function connect(UserInterface $user, UserResponseInterface $response)
    {
        $property = $this->getProperty($response);
        $username = $response->getUsername();
        //on connect - get the access token and the user ID
        $service = $response->getResourceOwner()->getName();
        $setter = 'set'.ucfirst($service);
        $setter_id = $setter.'Id';
        $setter_token = $setter.'AccessToken';
        //we "disconnect" previously connected users
        if (null !== $previousUser = $this->userManager->findUserBy(array($property => $username))) {
            $previousUser->$setter_id(null);
            $previousUser->$setter_token(null);
            $this->userManager->updateUser($previousUser);
        }
        //we connect current user
        $user->$setter_id($username);
        $user->$setter_token($response->getAccessToken());
        $this->userManager->updateUser($user);
    }
    /**
     * {@inheritdoc}
     */
    public function loadUserByOAuthUserResponse(UserResponseInterface $response)
    {
        $username = $response->getUsername();


        if($response->getEmail()==null )
        {
            $email = "fb_".$response->getUsername()."@bamsell.com";

        }
        else
        {
            $email= $response->getEmail();
        }


        $user = $this->userManager->findUserBy(array('username' => $response->getUsername()));

        if (!is_object($user) )
        {
            $user = $this->userManager->findUserBy(array('email' => $email));
        }


        //$user = $userManager->findUserBy(array($this->getProperty($response) => $username));
        ob_start();
        var_dump($response->getResponse());
        //var_dump($user);
        $data = ob_get_clean();
        //$fp = fopen("/var/www/bamsell.com/test.txt", "w");
        //fwrite($fp, $data);
        //fclose($fp);
        //when the user is registrating
        if (!is_object($user) ) {
            $service = $response->getResourceOwner()->getName();
            $setter = 'set'.ucfirst($service);
            $setter_id = $setter.'Id';
            $setter_token = $setter.'AccessToken';
            // create new user here
            $user = $this->userManager->createUser();
            $user->$setter_id($username);
            $user->$setter_token($response->getAccessToken());
            //I have set all requested data with the user's username
            //modify here with relevant data
            $user->setUsername($response->getFirstName().' '.$response->getLastName().time());
            $user->setFacebookId($response->getUsername());
            $name = basename($response->getProfilePicture());
            list($txt, $ext) = explode(".", $name);
            $name = $txt.time();
            $name = $name.".".$ext;
            $name = explode("?", $name)[0];
            file_put_contents("uploads/profilePics/".$name,file_get_contents($response->getProfilePicture()));

            $profilePic=new ProfilePic();
            $profilePic->setUrl($name);
            $profilePic->setAlt($name);
            $user->setPicture($profilePic);
            $user->setFirstname($response->getFirstName());
            $user->setLastname($response->getLastName());

            //user->setEmail($response->getEmail());


            $user->setEmail($email);



            $user->setPlainPassword($response->getUsername());

            $user->setEnabled(true);
            $this->userManager->updateUser($user);

            return $user;
        }
        else
        {
//            $userArray= array();
//            $userArray['id']=$user->getId();
//            $userArray['name']='';
//            $userArray['email']= $user->getEmail();

            return $user;
        }

        //ob_start();
        //var_dump($response->getResponse());
        //var_dump($user);
        //$data = ob_get_clean();
        //$fp = fopen("C:/Users/sebastien/Documents/bamsell/testOutput/textfile.html", "w");
        //fwrite($fp, $data);
        //fclose($fp);




        //if user exists - go with the HWIOAuth way
        $user = parent::loadUserByOAuthUserResponse($response);
        $serviceName = $response->getResourceOwner()->getName();
        $setter = 'set' . ucfirst($serviceName) . 'AccessToken';
        //update access token
        $user->$setter($response->getAccessToken());
        return $user;
    }
}