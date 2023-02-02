<?php
namespace App\Controller;

use App\Entity\Fruit;
use App\Repository\FruitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController{

    public function __construct(private FruitRepository $fruitRepository){

    }

    #[Route("/products", name: 'products.index')]
    public function products():Response
    {
        // $product = new Fruit();
        // $product->setDescription('des')->setImage('goyave_de_chine.jpg')->setPrix(10)->setNom('produ1');


        $title = 'produits';
        return $this->render('product/index.html.twig', [
            'products' => $this->fruitRepository->findAll(),
            
            // 'products' => ['produ1' => $product]
        ]);
    }



    #[Route("/product/{SLUG}", name: 'product.detail')]
    public function detail(string $SLUG):Response
    {
        $title = $SLUG;
        
        return $this->render('product/detail.html.twig', [
            'product' => $this->fruitRepository->findOneBy(['slug'=>$SLUG])
        ]);
    }
};

