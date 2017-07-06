<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 05.07.2017
 * Time: 21:42
 */

namespace HikingBundle\Controller;

use HikingBundle\Entity\Member;
use HikingBundle\Entity\Track;
use HikingBundle\Forms\FormTrackType;
use HikingBundle\Forms\FormMemberType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminHikingController extends Controller
{
    public function addTrackFormAction(Request $request){

        $track = new Track();
        $form = $this->createForm(FormTrackType::class, $track);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($track);
            $em->flush();
            return $this->redirectToRoute('all_tracks');
        }

        return $this->render("HikingBundle:Admin:add_track_form.html.twig",
            ['form_add_track' => $form->createView()]);
    }
    public function  addMemberFormAction(Request $request){
        $member = new Member();
        $form = $this->createForm(FormMemberType::class, $member);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($member);
            $em->flush();
            return $this->redirectToRoute('all_tracks');
            
        }
        
        return $this->render("HikingBundle:Admin:add_member_form.html.twig", ['form_add_member'=> $form->createView()]);
    }
}