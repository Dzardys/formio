<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route("/")]
    public function homepage() : Response
    {
        return $this->render("sites/index.html.twig");
    }

    #[Route("/forms/{id<\d+>}", name: "form_list", methods: ["GET"])]
    public function showForm(int $id) : Response
    {
       die("Ještě nepřidáno");
    }
    #[Route("/tos")]
    public function showTOS() : Response
    {
        die("Ještě nepřidáno");
    }

    #[Route("/contract")]
    public function showContract() : Response
    {
        die("Ještě nepřidáno");
    }

    #[Route("/answers/{id<\d+>}", name: "form_answers", methods: ["GET"])]
    public function showAnswers(int $id) : Response
    {
        die("Ještě nepřidáno");
    }
}