<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 07-09-16
 * Time: 17:09
 */

namespace Smile\PlatformBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class UserController extends Controller
{
    public function userProfileAction($userId){

        $userRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmileUserBundle:User');
        $user = $userRepo->find($userId);


        $postRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Post');
        $posts = $postRepo->getUsersPost($user);

        return $this->render('SmilePlatformBundle:Default:profile.html.twig', array(
            'posts' => $posts
        ));
    }
}