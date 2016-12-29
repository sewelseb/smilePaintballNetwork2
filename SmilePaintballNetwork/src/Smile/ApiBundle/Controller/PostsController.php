<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 07-09-16
 * Time: 12:27
 */

namespace Smile\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Smile\PlatformBundle\Entity\Downvote;
use Smile\PlatformBundle\Entity\Mail;
use Smile\PlatformBundle\Entity\Post;
use Smile\PlatformBundle\Entity\Upvote;
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


        foreach ($posts as $post)
        {
            $post->getUser()->setTeams(array());
            if ($post->getTeam() != null)
            {
                $post->getTeam()->setAdmin('');
            }

        }


        $view = $this->view($posts, 200)
            ->setTemplate("SmileApiBundle:Default:index.html.twig")
            ->setTemplateVar('posts')
        ;

        return $this->handleView($view);
    }

    public function upvoteAction($postId)
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
        {
            $postRepo = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('SmilePlatformBundle:Post');
            $post = $postRepo->find(intval($postId));

            $upvoteRepo = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('SmilePlatformBundle:Upvote');

            if ($upvoteRepo->checkExist($this->getUser(), $post)==false)
            {
                $upvote = new Upvote();
                $upvote->setUser($this->getUser());
                $upvote->setPost($post);
                $post->setUpvotes($post->getUpvotes()+1);

                $em = $this->getDoctrine()->getManager();

                $em->persist($post);
                $em->persist($upvote);

                $em->flush();


                $mail = new Mail($post->getUser(),  $this->get('sendinblue_api'));
                $mail->postUpvoted($post);
                $mail->sendMail();
            }



        }
        $view = $this->view('', 200)
            ->setTemplate("SmileApiBundle:Default:index.html.twig")
            ->setTemplateVar('posts')
        ;

        return $this->handleView($view);
    }

    public function downvoteAction($postId)
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
        {
            $postRepo = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('SmilePlatformBundle:Post');
            $post = $postRepo->find(intval($postId));

            $DownvoteRepo = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('SmilePlatformBundle:Downvote');

            if ($DownvoteRepo->checkExist($this->getUser(), $post)==false)
            {
                $downVote= new Downvote();
                $downVote->setUser($this->getUser());
                $downVote->setPost($post);
                $post->setDownvotes($post->getDownvotes()+1);

                $em = $this->getDoctrine()->getManager();

                $em->persist($post);
                $em->persist($downVote);

                $em->flush();
            }


        }

        $view = $this->view('', 200)
            ->setTemplate("SmileApiBundle:Default:index.html.twig")
            ->setTemplateVar('posts')
        ;

        return $this->handleView($view);
    }



    public function getOlderPostsAction($postId)
    {
        $postRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Post');
        $posts = $postRepo->findOlderThen($postId);

        foreach ($posts as $post)
        {
            $post->getUser()->setTeams(array());

            if ($post->getTeam() != null)
            {
                $post->getTeam()->setAdmin('');
            }

        }

        $view = $this->view($posts, 200)
            ->setTemplate("SmileApiBundle:Default:index.html.twig")
            ->setTemplateVar('posts')
        ;

        return $this->handleView($view);
    }



}