<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 13-09-16
 * Time: 10:10
 */

namespace Smile\PlatformBundle\Controller;

use Smile\PlatformBundle\Entity\Post;
use Smile\PlatformBundle\Entity\PostPic;
use Smile\PlatformBundle\Entity\Team;
use Smile\PlatformBundle\Form\PostPicType;
use Smile\UserBundle\Entity\teamPicture;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Smile\UserBundle\Form\teamPictureType;

class TeamController extends Controller
{
    public function createTeamAction(Request $request){
        $team = new Team();

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $team);

        $formBuilder
            ->add('name', TextType::class)
            ->add('teamPicture',     teamPictureType::class, array('required' =>false))
            ->add('save',      SubmitType::class);


        $form = $formBuilder->getForm();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            if($team->getTeamPicture() != null)
            {
                $team->getTeamPicture()->upload($this->getUser());
            }
            else
            {
                $defaultTeamPic = new teamPicture();
                $defaultTeamPic->setAlt("defaultpic.jpg");
                $defaultTeamPic->setUrl("defaultpic.jpg");
                $team->setTeamPicture($defaultTeamPic);
            }

            $team->setAdmin($this->getUser());



            $post= new Post();
            $post->setTitle("New Team : ".$team->getName());
            $post->setTeamPic($team->getTeamPicture());
            $post->setTeam($team);
            $post->setIsNewTeamPic(true);
            $post->setUser($this->getUser());
            $post->setType("team_picture");
            $em = $this->getDoctrine()->getManager();

            $em->persist($post);
            $em->persist($team);
            $this->getUser()->addTeam($team);

            $em->persist($this->getUser());

            $em->flush();

            return $this->render('SmilePlatformBundle::Default/form/actualise.html.twig', array(

                'formCreateTeam' => $form->createView(),

            ));

        }

        return $this->render('SmilePlatformBundle::Default/form/createTeam.html.twig', array(

            'formCreateTeam' => $form->createView(),

        ));

    }

    public function teamAction($id)
    {
        $teamRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Team');
        $team = $teamRepo->find($id);
        $userRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmileUserBundle:User');
        $users = $userRepo->getUsersByTeam($team);

        $postRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Post');
        $posts = $postRepo->getPostByTeam($team);


        return $this->render('SmilePlatformBundle::Default/team.html.twig', array(

            'team' =>$team,
            'users' => $users,
            'posts' => $posts

        ));
    }

    public function editAction($id, Request $request)
    {
        $teamRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Team');
        $team = $teamRepo->find($id);

        $oldTeamName = $team->getName();
        $oldTeamPicUrl = $team->getTeamPicture()->getUrl();

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $team);

        $formBuilder
            ->add('name', TextType::class)
            ->add('teamPicture',     teamPictureType::class, array('required' =>false))
            ->add('save',      SubmitType::class);


        $form = $formBuilder->getForm();

        $newTeamPic = new teamPicture();

        $postRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Post');

        $lastPicTeamPost = $postRepo->findLastPicTeamPost($team);

        $newTeamPic->setAlt($lastPicTeamPost->getTeamPic()->getAlt());
        $newTeamPic->setUrl($lastPicTeamPost->getTeamPic()->getUrl());

        $lastPicTeamPost->setTeamPic($newTeamPic);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            //dump('test2');
            if($team->getAdmin() == $this->getUser())
            {
                $postTitle = "";
                if($team->getTeamPicture() != null)
                {

                    $team->getTeamPicture()->upload($this->getUser());

                }

                if ($team->getTeamPicture()->getUrl() != $oldTeamPicUrl)
                {
                    $postTitle = "New Team Logo: ";
                    if($team->getName() != $oldTeamName)
                    {
                        $postTitle = "New Team Logo & Name: ";
                    }
                }
                else
                {
                    if($team->getName() != $oldTeamName)
                    {
                        $postTitle = "New Team Name: ";
                    }
                }


                $team->setAdmin($this->getUser());

                $post= new Post();
                $post->setTitle($postTitle.$team->getName());
                $post->setTeamPic($team->getTeamPicture());
                $post->setTeam($team);
                $post->setCreationTime(time());
                $post->setIsNewTeamPic(true);
                $post->setUser($this->getUser());
                $post->setType("team_picture");

                $em = $this->getDoctrine()->getManager();

                $em->persist($lastPicTeamPost);
                $em->flush();

                $em = $this->getDoctrine()->getManager();

                $em->persist($post);
                $em->persist($team);

                $em->flush();
                dump('test5');
                return $this->render('SmilePlatformBundle::Default/form/actualise.html.twig', array(

                    'form' => $form->createView(),

                ));
                //return $this->redirect($this->generateUrl('smile_platform_team', array('id' => $team->getId())));
                //return $this->redirectToRoute('smile_platform_team', array('id' => $team->getId()));
            }
        }

        return $this->render('SmilePlatformBundle::Default/form/createTeam.html.twig', array(

            'formCreateTeam' => $form->createView(),

        ));
    }

    public function addToTeamAction($teamId, $userId)
    {
        $teamRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Team');
        $team = $teamRepo->find($teamId);
        $userRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmileUserBundle:User');
        $user = $userRepo->find($userId);

        $user->addTeam($team);
        $em = $this->getDoctrine()->getManager();

        $em->persist($user);

        $em->flush();

        return $this->redirectToRoute('smile_platform_profile', array('userId' => $userId));

    }

    public function leaveTeamAction($teamId)
    {
        $teamRepo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SmilePlatformBundle:Team');
        $team = $teamRepo->find($teamId);
        $this->getUser()->removeTeam($team);
        $em = $this->getDoctrine()->getManager();

        $em->persist($this->getUser());

        $em->flush();
        return $this->redirectToRoute('smile_platform_profile', array('userId' => $this->getUser()->getId()));
    }
}