<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController{
    /**
     * @Route("/test", name="test")
     */
    public function index(){
        return $this->render('index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    /**
     * @Route("/message", name="message")
     */
    public function messagePage(){
        return $this->render('message.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
