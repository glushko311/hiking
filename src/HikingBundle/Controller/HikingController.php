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

        return $this->render("HikingBundle:Track:all_tracks.html.twig", ['tracks' => $tracks, 'is_fin' => $is_fin]);
    }
    public function showSingleTrackAction($track_id){
        $em = $this->getDoctrine();
        $trackRepository = $em->getRepository("HikingBundle:Track");
        $track =$trackRepository->find($track_id);
        return $this->render("HikingBundle:Track:single_track.html.twig", ['track' => $track]);
    }
}