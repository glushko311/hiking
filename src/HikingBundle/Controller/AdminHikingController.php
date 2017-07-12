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
use HikingBundle\Entity\MemberTrack;
use HikingBundle\Forms\FormTrackType;
use HikingBundle\Forms\FormMemberType;
use HikingBundle\Forms\FormAddMembersToTrackType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
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
    public function addMembersToTrackAction(Request $request){
        $em = $this->getDoctrine();
        $memberRepository = $em->getRepository("HikingBundle:Member");
        $members = $memberRepository->findAll();

        $choices = [];
        foreach ($members as $member){
            $choices[$member->getName()] = $member->getMember_Id();
        }

       $memberTrack = new MemberTrack();
        $task = [];
        $form = $this->createFormBuilder($memberTrack)->add('member_id',ChoiceType::class, [
            'choices' => $choices,

        ])->add('track_id',IntegerType::class)
          ->add('submit',SubmitType::class)->getForm();

        $form->handleRequest($request);


        if ($form->isSubmitted()){
            $task = $form->getData();
//            echo "<h1>77777777</h1>";
//            var_dump($task);

        }

        return $this->render("HikingBundle:Admin:members_to_track.html.twig",['member_to_track'=>$form->createView()]);
    }
}