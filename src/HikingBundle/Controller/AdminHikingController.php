<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 05.07.2017
 * Time: 21:42
 */

namespace HikingBundle\Controller;

use HikingBundle\Entity\Track;
use HikingBundle\Forms\FormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminHikingController extends Controller
{
    public function addTrackFormAction(Request $request){

        $track = new Track();
        $form = $this->createForm(FormType::class, $track);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($track);
            $em->flush();
        }

        return $this->render("HikingBundle:Admin:add_track_form.html.twig",
            ['form_add_blog' => $form->createView()]);
    }
}