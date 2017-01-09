<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 07-09-16
 * Time: 10:33
 */

namespace Smile\PlatformBundle\Controller;

use Facebook\Facebook;
use Facebook\FacebookApp;
use Facebook\FacebookRequest;
use Smile\PlatformBundle\Entity\Backup;
use Smile\PlatformBundle\Entity\Post;
use Smile\PlatformBundle\Entity\PostPic;
use Smile\PlatformBundle\Form\PostPicType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class PostController extends Controller
{
    public function addNewAction(Request $request)
    {
        $redirect = false;

        $post = new Post();

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $post);

        $teams =

        $formBuilder
            ->add('title', TextType::class)
            ->add('team', EntityType::class, array(
                'class' =>'SmilePlatformBundle:Team',
                'choices' => $this->getUser()->getTeams(),
                'choice_label' => 'name',
                'placeholder' => 'Post as a team:',
                'required' => false
            ))
            ->add('eventName', TextType::class, array('required' => false))
            ->add('picture', PostPicType::class, array('required' => false))
            ->add('url', TextType::class, array('required' => false))
            ->add('save', SubmitType::class);

        $form = $formBuilder->getForm();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $redirect = true;
            $postId = null;

            if ($post->getPicture() != null || $post->getUrl() != null) {
                $post->setType('picture_local');
                if ($post->getUrl() != null) {
                    $post->setType('picture_externalUrl');
                }
                $post->setCreationTime(time());
                $post->setUser($this->getUser());
                if ($post->getPicture() != null) {
                    $post->getPicture()->upload($post, $this->container);
                }


                $regex_youtube_pattern = "/(youtube.com|youtu.be)\/(watch)?(\?v=)?(\S+)?/";


                if (preg_match($regex_youtube_pattern, $post->getUrl(), $match)) {
                    $post->setUrl(preg_replace(
                        "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
                        "//www.youtube.com/embed/$2",
                        $post->getUrl()));
                    $post->setType('video_youtube');
                    $picName='uploads/thumbnails/yt_'.time().'.jpg';
                    file_put_contents($picName, file_get_contents('http://img.youtube.com/vi/'.$post->getYoutubeId().'/mqdefault.jpg'));
                    $post->setThumbnails($picName);

                    $dataManager = $this->get('liip_imagine.data.manager');    // the data manager service
                    $image = $dataManager->find('profile_pic', $picName);



                    $thumb = $this->get('liip_imagine.filter.manager')->applyFilter($image, 'profile_pic')->getContent();
                    $f = fopen($picName, 'w');// create thumbnail file
                    //dump($this->getUploadDir().'/'.$name);
                    fwrite($f, $thumb);                                             // write the thumbnail
                    fclose($f);


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

                    $picName='uploads/thumbnails/fb_'.time().'.jpg';
                    file_put_contents($picName, file_get_contents('https://graph.facebook.com/'.$post->getFacebookId().'/picture'));
                    $post->setThumbnails($picName);

                    $dataManager = $this->get('liip_imagine.data.manager');    // the data manager service
                    $image = $dataManager->find('profile_pic', $picName);



                    $thumb = $this->get('liip_imagine.filter.manager')->applyFilter($image, 'profile_pic')->getContent();
                    $f = fopen($picName, 'w');// create thumbnail file
                    //dump($this->getUploadDir().'/'.$name);
                    fwrite($f, $thumb);                                             // write the thumbnail
                    fclose($f);

                    //$picName='uploads/thumbnails/fb'.time().'jpg';
                    //file_put_contents($picName, file_get_contents('https://graph.facebook.com/{{ post.getFacebookId() }}/picture'));


                } elseif (count($urlPictureFb) > 1) {
                    $post->setType('picture_facebook');
                    $picName='uploads/thumbnails/fb_'.time().'.jpg';
                    file_put_contents($picName, file_get_contents('https://graph.facebook.com/'.$post->getFacebookId().'/picture'));
                    $post->setThumbnails($picName);

                    $dataManager = $this->get('liip_imagine.data.manager');    // the data manager service
                    $image = $dataManager->find('profile_pic', $picName);



                    $thumb = $this->get('liip_imagine.filter.manager')->applyFilter($image, 'profile_pic')->getContent();
                    $f = fopen($picName, 'w');// create thumbnail file
                    //dump($this->getUploadDir().'/'.$name);
                    fwrite($f, $thumb);                                             // write the thumbnail
                    fclose($f);
                }


                $em = $this->getDoctrine()->getManager();

                $em->persist($post);

                $em->flush();

                $postId = $post->getId();


                $request->getSession()->getFlashBag()->add('notice', 'Post created.');

                //return $this->redirect($request->getUri());
                return $this->render('SmilePlatformBundle::Default/form/actualiseNewPost.html.twig', array(

                    'form' => $form->createView(),
                    'postId' => $postId

                ));
            }

            $request->getSession()->getFlashBag()->add('notice', 'Nothing to post :(.');


        }

        return $this->render('SmilePlatformBundle::Default/form/addNewPost.html.twig', array(

            'form' => $form->createView(),


        ));

    }

    public function addNewInPageAction(Request $request)
    {
        $redirect = false;

        $post = new Post();

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $post);

        $teams =

            $formBuilder
                ->add('title', TextType::class)
                ->add('team', EntityType::class, array(
                    'class' =>'SmilePlatformBundle:Team',
                    'choices' => $this->getUser()->getTeams(),
                    'choice_label' => 'name',
                    'placeholder' => 'Post as a team:',
                    'required' => false
                ))
                ->add('eventName', TextType::class, array('required' => false))
                ->add('picture', PostPicType::class, array('required' => false))
                ->add('url', TextType::class, array('required' => false))
                ->add('save', SubmitType::class);

        $form = $formBuilder->getForm();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $redirect = true;
            $postId = null;

            if ($post->getPicture() != null || $post->getUrl() != null) {
                $post->setType('picture_local');
                if ($post->getUrl() != null) {
                    $post->setType('picture_externalUrl');
                }
                $post->setCreationTime(time());
                $post->setUser($this->getUser());
                if ($post->getPicture() != null) {
                    $post->getPicture()->upload($post, $this->container);
                }


                $regex_youtube_pattern = "/(youtube.com|youtu.be)\/(watch)?(\?v=)?(\S+)?/";


                if (preg_match($regex_youtube_pattern, $post->getUrl(), $match)) {
                    $post->setUrl(preg_replace(
                        "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
                        "//www.youtube.com/embed/$2",
                        $post->getUrl()));
                    $post->setType('video_youtube');
                    $picName='uploads/thumbnails/yt_'.time().'.jpg';
                    file_put_contents($picName, file_get_contents('http://img.youtube.com/vi/'.$post->getYoutubeId().'/mqdefault.jpg'));
                    $post->setThumbnails($picName);

                    $dataManager = $this->get('liip_imagine.data.manager');    // the data manager service
                    $image = $dataManager->find('profile_pic', $picName);



                    $thumb = $this->get('liip_imagine.filter.manager')->applyFilter($image, 'profile_pic')->getContent();
                    $f = fopen($picName, 'w');// create thumbnail file
                    //dump($this->getUploadDir().'/'.$name);
                    fwrite($f, $thumb);                                             // write the thumbnail
                    fclose($f);


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

                    $picName='uploads/thumbnails/fb_'.time().'.jpg';
                    file_put_contents($picName, file_get_contents('https://graph.facebook.com/'.$post->getFacebookId().'/picture'));
                    $post->setThumbnails($picName);

                    $dataManager = $this->get('liip_imagine.data.manager');    // the data manager service
                    $image = $dataManager->find('profile_pic', $picName);



                    $thumb = $this->get('liip_imagine.filter.manager')->applyFilter($image, 'profile_pic')->getContent();
                    $f = fopen($picName, 'w');// create thumbnail file
                    //dump($this->getUploadDir().'/'.$name);
                    fwrite($f, $thumb);                                             // write the thumbnail
                    fclose($f);

                    //$picName='uploads/thumbnails/fb'.time().'jpg';
                    //file_put_contents($picName, file_get_contents('https://graph.facebook.com/{{ post.getFacebookId() }}/picture'));


                } elseif (count($urlPictureFb) > 1) {
                    $post->setType('picture_facebook');
                    $picName='uploads/thumbnails/fb_'.time().'.jpg';
                    file_put_contents($picName, file_get_contents('https://graph.facebook.com/'.$post->getFacebookId().'/picture'));
                    $post->setThumbnails($picName);

                    $dataManager = $this->get('liip_imagine.data.manager');    // the data manager service
                    $image = $dataManager->find('profile_pic', $picName);



                    $thumb = $this->get('liip_imagine.filter.manager')->applyFilter($image, 'profile_pic')->getContent();
                    $f = fopen($picName, 'w');// create thumbnail file
                    //dump($this->getUploadDir().'/'.$name);
                    fwrite($f, $thumb);                                             // write the thumbnail
                    fclose($f);
                }


                $em = $this->getDoctrine()->getManager();

                $em->persist($post);

                $em->flush();

                $postId = $post->getId();


                $request->getSession()->getFlashBag()->add('notice', 'Post created.');

                //return $this->redirect($request->getUri());
                return $this->render('SmilePlatformBundle::Default/form/actualiseNewPost.html.twig', array(

                    'form' => $form->createView(),
                    'postId' => $postId

                ));
            }

            $request->getSession()->getFlashBag()->add('notice', 'Nothing to post :(.');


        }

        return $this->render('SmilePlatformBundle::Default/form/addNewPostInPage.html.twig', array(

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

        $firstView = false;

        $post->setViews($post->getViews()+1);

        if (!$post->getFirstView())
        {
            $post->setFirstView(true);
            //dump($post);
            $em = $this->getDoctrine()->getManager();

            $em->persist($post);

            $em->flush();
            $firstView = true;
        }
        else
        {
            $em = $this->getDoctrine()->getManager();

            $em->persist($post);

            $em->flush();
        }

        $commentRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Comment');
        $comments = $commentRepo->getPostsComment($post);


        return $this->render('SmilePlatformBundle::Default/post.html.twig', array(
            'post' => $post,
            'comments' => $comments,
            'firstView' => $firstView
        ));
    }

    public function numberOfViewsAction()
    {
        $postRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Post');
        $totalViews = $postRepo->getTotalViews()[1];
        //dump($totalViews);
        return $this->render('SmilePlatformBundle::Default/Blocs/postViews.html.twig', array(
            'totalViews' => $totalViews
        ));
    }

    public function deletePostAction($postId)
    {
        $postRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Post');
        $post = $postRepo->find($postId);
        if ($post->getUser() == $this->getUser())
        {
            $backup = new Backup();
            $backup->setEntityType('Post');
            $backup->setEnityJson(json_encode($post));
            $backup->setTime(time());

            $em = $this->getDoctrine()->getManager();

            $em->persist($backup);
            $em->remove($post);

            $em->flush();

            return $this->redirectToRoute('Smile_platform_homepage');
        }
        else
        {
            return $this->redirectToRoute('smile_platform_post', array('postId' => $postId));
        }


    }

}