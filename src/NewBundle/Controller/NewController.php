<?php

namespace NewBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NewController extends Controller
{

    public function testAction(Request $request)
    {
        return $this->render('NewBundle:test:test.html.twig');
    }
}
