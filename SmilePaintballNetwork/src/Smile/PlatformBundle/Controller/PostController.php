<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 07-09-16
 * Time: 10:33
 */

namespace Smile\PlatformBundle\Controller;

use Smile\PlatformBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PostController extends Controller
{
    public function addNewAction(Request $request){
        $post = new Post();

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $post);



    }
}