<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    /**
     * @Route("/teacher", name="teacher")
     */
    public function index()
    { $name = $_GET["name"];
        return $this->render('teacher/showTeacher.html.twig', [

            'name' => $name,
        ]);
    }
}
