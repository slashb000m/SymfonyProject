<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class StudentController extends AbstractController
{

    public function index()
    {
        return $this->render('student/index.html.twig', [
            'classe' => 'Bonjour mes etudiants',
        ]);
    }


    /**
     * @Route("/afficher", name="afficher")
     */
    public function affichage()
    {
        return $this->render('student/afficher.html.twig', [
            'classe' => '3A25',
        ]);
    }



    public function display()
    {
        return new Response(" <html> <body>hello</body></html>");
    }
}
