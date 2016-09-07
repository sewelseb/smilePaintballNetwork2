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
    public function addNewAction(Request $request){
        $post = new Post();

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $post);

        $formBuilder
            ->add('title',     TextType::class)
            ->add('eventName',     TextType::class)
            ->add('picture', PostPicType::class)
            ->add('save',      SubmitType::class)
            ->add('url',     TextType::class)
        ;

        $form = $formBuilder->getForm();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $post->setCreationTime(time());
            $post->setUser($this->getUser());
            $post->getPicture()->upload($post);

            $em = $this->getDoctrine()->getManager();

            $em->persist($post);

            $em->flush();


            $request->getSession()->getFlashBag()->add('notice', 'Post created.');




        }

        return $this->render('SmilePlatformBundle::Default/form/addNewPost.html.twig', array(

            'form' => $form->createView(),

        ));

    }
}