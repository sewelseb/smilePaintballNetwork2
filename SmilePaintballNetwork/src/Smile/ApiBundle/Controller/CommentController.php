<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 08-09-16
 * Time: 00:03
 */

namespace Smile\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Smile\PlatformBundle\Entity\Comment;
use Symfony\Component\HttpFoundation\Request;


class CommentController extends FOSRestController
{
    public function newCommentAction(Request $request)
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
        {
            $postRepo = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('SmilePlatformBundle:Post');
            $post = $postRepo->find($request->request->get('post'));
            $comment = new Comment();
            $comment->setPublicationDate(time());
            $comment->setUser($this->getUser());
            $comment->setPost($post);
            $comment->setText($request->request->get('text'));
            $post->setComments($post->getComments()+1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

            $view = $this->view($comment, 200)
                ->setTemplate("SmileApiBundle:Default:index.html.twig")
                ->setTemplateVar('posts')
            ;

            return $this->handleView($view);
        }
    }
}