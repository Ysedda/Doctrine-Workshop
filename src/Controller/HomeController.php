<?php

namespace App\Controller;

use App\Repository\SquirrelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SquirrelRepository $squirrelRepository): Response
    {
        $squirrels = $squirrelRepository->findAll();
        return $this->render(
            'home/index.html.twig',
            ['squirrels' => $squirrels]
        );
    }
}
