<?php

namespace App\Controller;

use App\Repository\FruitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    public function __construct(private FruitRepository $fruitRepository){}

    #[Route('/', name: 'homepage.index')]
    public function index():Response
    {
        $title = 'Accueil';
        return $this->render('homepage/index.html.twig', [
            'title' => $title,
            'products' => $this->fruitRepository->findThreeFruitsRand()
        ]);
    }
}