<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/home', name: 'main_home')]
    public function home(): Response
    {
        return $this->render('main/home.html.twig');
    }
    #[Route('/cgu', name: 'main_cgu')]
    public function cgu(): Response
    {
        return $this->render('main/cgu.html.twig');
    }
    #[Route('/mentions', name: 'main_mentions')]
    public function mentions(): Response
    {
        return $this->render('main/mentions.html.twig');
    }
    #[Route('/presentation', name: 'main_presentation')]
    public function presentation(): Response
    {
        return $this->render('main/presentation.html.twig');
    }




}
