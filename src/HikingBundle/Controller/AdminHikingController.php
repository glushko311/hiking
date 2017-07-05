<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 05.07.2017
 * Time: 21:42
 */

namespace HikingBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminHikingController extends Controller
{
    public function showAddTrackFormAction(){
        return $this->render("HikingBundle:Admin:add_track.html.twig");
    }
}