<?php

namespace App\Controller;
use App\Form\SearcherType;
use App\Repository\FruitRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RechercheController extends AbstractController{
    public function __construct(private FruitRepository $fruitRepository){}

    #[Route("/search", name: 'products.search')]
    public function search(/*Request $request*/):Response
    {

        
        $title = 'recherche';
        return $this->render('search/index.html.twig', [
            // 'form' => $form->createView()
            //'resultats' =>
            'recherche'=>$_GET['nom'],
            'resultats' => $this->fruitRepository->search($_GET['nom'])
        ]);
    }

    // public function __construct(private RequestStack $requestStack){
        

    // }
}