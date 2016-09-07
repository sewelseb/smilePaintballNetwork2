<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 07-09-16
 * Time: 12:27
 */

namespace Smile\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Smile\PlatformBundle\Entity\Post;
use Symfony\Component\HttpFoundation\Request;



class PostsController extends FOSRestController
{
    public function getLastPostsAction()
    {

        $postRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Post');
        $posts = $postRepo->getLastXPosts();

        $view = $this->view($posts, 200)
            ->setTemplate("SmileApiBundle:Default:index.html.twig")
            ->setTemplateVar('posts')
        ;

        return $this->handleView($view);
    }

}