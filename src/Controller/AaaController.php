<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AaaController extends AbstractController
{
    /**
     * @Route("/aaa", name="aaa")
     */
    public function index()
    {
        return $this->render('aaa/index.html.twig', [
            'controller_name' => 'AaaController',
        ]);
    }
}
