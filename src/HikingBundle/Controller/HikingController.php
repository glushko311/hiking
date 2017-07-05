<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 04.07.2017
 * Time: 22:26
 */

namespace HikingBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HikingController extends Controller
{
    public function showTracksAction(){
        $em = $this->getDoctrine();
        $trackRepository = $em->getRepository("HikingBundle:Track");
        $is_fin = ['fin' => 'checked', 'plan' => ''];

        if(isset($_GET['is_fin']) && !empty($_GET['is_fin'] && $_GET['is_fin'] == 'false')){
            $tracks = $trackRepository->findBy(["status"=>1]);
            $is_fin = ['fin' => '', 'plan' => 'checked'];
        }else{
            $tracks = $trackRepository->findBy(["status"=>0]);
        }

        $members = [];

        foreach($tracks as $track){
            $trackId = $track->getTrack_id();

            $memberTrackRepository = $em->getRepository("HikingBundle:MemberTrack");
            $memberTracks = $memberTrackRepository->findBy(['track_Id' => $trackId]);
            $memberToTrack = [];
            foreach ($memberTracks as $memberTrack){

                $memberId = $memberTrack->getMemberId();

                $memberRepository = $em->getRepository("HikingBundle:Member");
                $member = $memberRepository->findBy(['member_id' => $memberId]);

                $memberToTrack[] = $member;
            }


            $members[$trackId] = $memberToTrack;
        }

        return $this->render("HikingBundle:Track:all_tracks.html.twig", ['tracks' => $tracks, 
                                                                         'is_fin' => $is_fin,
                                                                         'members' => $members               
                                                                         ]);
    }
   
    public function showSingleTrackAction($track_id){
        $em = $this->getDoctrine();
        $trackRepository = $em->getRepository("HikingBundle:Track");
        $track = $trackRepository->find($track_id);
        
        if(empty($track)){
            return $this->render("HikingBundle:Track:track404.html.twig");
        }

        $memberTrackRepository = $em->getRepository("HikingBundle:MemberTrack");
        $memberTracks = $memberTrackRepository->findBy(['track_Id' => $track_id]);
        $members = [];
        foreach ($memberTracks as $memberTrack){
           $memberId = $memberTrack->getMemberId();

            $memberRepository = $em->getRepository("HikingBundle:Member");
            $member = $memberRepository -> findBy(['member_id' => $memberId]);

            $members[]= $member;
        }


        return $this->render("HikingBundle:Track:single_track.html.twig", ['track' => $track, 
                                                                           'members'=>$members ]);
    }
    
    public function showSingleMemberAction($member_id){
            $em = $this->getDoctrine();
            $memberRepository = $em->getRepository("HikingBundle:Member");
            $member = $memberRepository->find($member_id);

        if(empty($member)){
            return $this->render("HikingBundle:Member:member404.html.twig");
        }
        return $this->render("HikingBundle:Member:single_member.html.twig", ['member' => $member]);
    }
}