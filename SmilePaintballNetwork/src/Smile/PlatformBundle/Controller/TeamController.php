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

            $team->setAdmin($this->getUser());


            $em = $this->getDoctrine()->getManager();

            $em->persist($team);
            $this->getUser()->addTeam($team);

            $em->persist($this->getUser());

            $em->flush();


        }

        return $this->render('SmilePlatformBundle::Default/form/createTeam.html.twig', array(

            'form' => $form->createView(),

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

        return $this->render('SmilePlatformBundle::Default/team.html.twig', array(

            'team' =>$team,
            'users' => $users

        ));
    }
}