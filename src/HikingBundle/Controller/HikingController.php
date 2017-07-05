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
        if(!empty($_GET['is_fin'] && $_GET['is_fin'] == 'false')){
            $tracks = $trackRepository->findBy(["status"=>1]);
        }else{
            $tracks = $trackRepository->findBy(["status"=>0]);
        }

        return $this->render("HikingBundle:Track:all_tracks.html.twig", ['tracks' => $tracks]);
    }
    public function showSingleTrackAction($track_id){
        $em = $this->getDoctrine();
        $trackRepository = $em->getRepository("HikingBundle:Track");
        $track =$trackRepository->find($track_id);
        return $this->render("HikingBundle:Track:single_track.html.twig", ['track' => $track]);
    }
}