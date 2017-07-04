<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 03.07.2017
 * Time: 21:33
 */

namespace HikingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function homepageAction(){
        return $this->render("::base.html.twig");
    }

    public function blogViewAction( $id ){

        $em = $this->getDoctrine();
        $blogRepository = $em->getRepository("HikingBundle:Blog");
        $blog = $blogRepository->find($id);
        return $this->render("HikingBundle:Blog:view.html.twig", ['blog' => $blog]);
    }
    
    public function  teaserAction(){
        $em = $this->getDoctrine();
        $blogRepository = $em->getRepository("HikingBundle:Blog");
        $blogs = $blogRepository->findAll();
        return $this->render("HikingBundle:Blog:teaser.html.twig", ['blogs' => $blogs]);
        
    }
}