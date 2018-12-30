<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        $saludo = "Hola mundo";

        return $this->render('home/index.html.twig', [
            "saludo" => $saludo
        ]);
    }
}
