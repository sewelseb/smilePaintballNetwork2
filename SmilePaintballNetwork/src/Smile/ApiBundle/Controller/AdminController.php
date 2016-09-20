<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 20-09-16
 * Time: 18:06
 */

namespace Smile\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Smile\PlatformBundle\Entity\Comment;
use Symfony\Component\HttpFoundation\Request;


class AdminController extends FOSRestController
{
    public function statsAction(Request $request)
    {
        $rapport = array();

        $postRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Post');
        $posts = $postRepo->findAll();
        $rapport["number_of_posts"]=count($posts);

        $userRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmileUserBundle:User');
        $users = $userRepo->findAll();
        $rapport["number_of_users"]=count($users);

        $upvoteRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Upvote');
        $upvotes = $upvoteRepo->findAll();
        $rapport["number_of_upvotes"]=count($upvotes);

        $downvoteRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Downvote');
        $downvotes = $downvoteRepo->findAll();
        $rapport["number_of_downvotes"]=count($downvotes);

        $commentRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Comment');
        $comments = $commentRepo->findAll();
        $rapport["number_of_comments"]=count($comments);

        $view = $this->view($rapport, 200)
            ->setTemplate("SmileApiBundle:Default:index.html.twig")
            ->setTemplateVar('posts')
        ;

        return $this->handleView($view);
    }
}