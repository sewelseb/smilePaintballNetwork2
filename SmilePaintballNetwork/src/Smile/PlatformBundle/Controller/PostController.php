<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 07-09-16
 * Time: 10:33
 */

namespace Smile\PlatformBundle\Controller;

use Smile\PlatformBundle\Entity\Post;
use Smile\PlatformBundle\Entity\PostPic;
use Smile\PlatformBundle\Form\PostPicType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class PostController extends Controller
{
    public function addNewAction(Request $request)
    {
        $post = new Post();

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $post);

        $formBuilder
            ->add('title', TextType::class)
            ->add('eventName', TextType::class, array('required' => false))
            ->add('picture', PostPicType::class, array('required' => false))
            ->add('url', TextType::class, array('required' => false))
            ->add('save', SubmitType::class);

        $form = $formBuilder->getForm();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            if ($post->getPicture() != null || $post->getUrl() != null) {
                $post->setType('picture_local');
                if ($post->getUrl() != null) {
                    $post->setType('picture_externalUrl');
                }
                $post->setCreationTime(time());
                $post->setUser($this->getUser());
                if ($post->getPicture() != null) {
                    $post->getPicture()->upload($post);
                }


                $regex_youtube_pattern = "/(youtube.com|youtu.be)\/(watch)?(\?v=)?(\S+)?/";


                if (preg_match($regex_youtube_pattern, $post->getUrl(), $match)) {
                    $post->setUrl(preg_replace(
                        "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
                        "//www.youtube.com/embed/$2",
                        $post->getUrl()));
                    $post->setType('video_youtube');
                }

                $urlFb = explode('facebook.com', $post->getUrl());
                $urlVideoFb = 0;
                $urlPictureFb = 0;
                if (count($urlFb) > 1) {
                    $urlVideoFb = explode('/videos/', $post->getUrl());
                    $urlPictureFb = explode('/photos/', $post->getUrl());
                }

                if (count($urlVideoFb) > 1) {
                    $post->setType('video_facebook');
                } elseif (count($urlPictureFb) > 1) {
                    $post->setType('picture_facebook');
                }


                $em = $this->getDoctrine()->getManager();

                $em->persist($post);

                $em->flush();


                $request->getSession()->getFlashBag()->add('notice', 'Post created.');
            }

            $request->getSession()->getFlashBag()->add('notice', 'Nothing to post :(.');


        }

        return $this->render('SmilePlatformBundle::Default/form/addNewPost.html.twig', array(

            'form' => $form->createView(),

        ));

    }

    public function topTenAction()
    {
        $postRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Post');
        $posts = $postRepo->getTopTen();
        return $this->render('SmilePlatformBundle::Default/Blocs/topTen.html.twig', array(

            'posts' => $posts,

        ));
    }

    public function showPostAction($postId)
    {
        $postRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Post');
        $post = $postRepo->find(intval($postId));

        $commentRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Comment');
        $comments = $commentRepo->getPostsComment($post);


        return $this->render('SmilePlatformBundle::Default/post.html.twig', array(

            'post' => $post,
            'comments' => $comments
        ));
    }

}