<?php

namespace App\DataFixtures;

use App\Entity\Fruit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FruitFixtures extends Fixture
{
    private array $products = [
         [
            'name' => 'Papayes',
            'price' => 20,
            'image' => 'papaye.jpg',
            'slug' => 'papaye',
            'description' => 'Des papayes de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'Avocats',
            'price' => 10,
            'image' => 'avocat.jpg',
            'slug' => 'avocat',
            'description' => 'Des avocats de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'Bananes',
            'price' => 4.5,
            'image' => 'banane_mures.jpg',
            'slug' => 'bananes-mures',
            'description' => 'Des bananes de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'Litchis',
            'price' => 12,
            'image' => 'litchi.jpg',
            'slug' => 'litchis',
            'description' => 'Des litchis de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'Goyaves',
            'price' => 6,
            'image' => 'goyave.jpg',
            'slug' => 'goyave',
            'description' => 'Des goyaves de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'Canne à sucres',
            'price' => 11,
            'image' => 'cannes-a-sucre.jpg',
            'slug' => 'canne-a-sucre',
            'description' => 'Des cannes à sucre de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'Oranges',
            'price' => 7,
            'image' => 'orange.jpg',
            'slug' => 'oranges',
            'description' => 'Des oranges de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'Clementines',
            'price' => 5,
            'image' => 'clementines.jpg',
            'slug' => 'clementines',
            'description' => 'Des clementines de trés bonne qualité, bien savoureux'
        ]
        ,[
            'name' => 'Jacquiers',
            'price' => 20,
            'image' => 'jacquier.jpg',
            'slug' => 'jacquiers',
            'description' => 'Des jacquiers de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'Goyaves de Chine',
            'price' => 6,
            'image' => 'goyave_de_chine.jpg',
            'slug' => 'goyaves-de-chine',
            'description' => 'Des goyaves de chines de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'Framboises',
            'price' => 12,
            'image' => 'framboiseS.jpg',
            'slug' => 'framboises',
            'description' => 'Des framboises de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'Fraises',
            'price' => 11,
            'image' => 'fraise.jpg',
            'slug' => 'fraises',
            'description' => 'Des fraises de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'mangues',
            'price' => 5,
            'image' => 'mangue.jpg',
            'slug' => 'mangues',
            'description' => 'Des mangues de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'corossols',
            'price' => 3,
            'image' => 'corossol.jpg',
            'slug' => 'corossols',
            'description' => 'Des corossols de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'dattes',
            'price' => 6,
            'image' => 'datte.jpg',
            'slug' => 'dattess',
            'description' => 'Des dattes de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'kakis',
            'price' => 11,
            'image' => 'kaki.jpg',
            'slug' => 'kakis',
            'description' => 'Des kakis de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'mandarines',
            'price' => 11,
            'image' => 'mandarine.jpg',
            'slug' => 'mandarines',
            'description' => 'Des mandarines de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'pamplemousses',
            'price' => 12,
            'image' => 'pamplemousse.jpg',
            'slug' => 'pamplemousses',
            'description' => 'Des pamplemousses de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'peches',
            'price' => 14,
            'image' => 'peche.jpg',
            'slug' => 'peches',
            'description' => 'Des peches de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'pommes',
            'price' => 15,
            'image' => 'pomme.jpg',
            'slug' => 'pommes',
            'description' => 'Des pommes de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'Prunes',
            'price' => 7,
            'image' => 'prune.jpg',
            'slug' => 'prunes',
            'description' => 'Des prunes de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'spondias (prunes de juin)',
            'price' => 7,
            'image' => 'spondias.jpg',
            'slug' => 'spondias',
            'description' => 'Des spondias de trés bonne qualité, bien savoureux'
        ],
        [
            'name' => 'tamarins',
            'price' => 13,
            'image' => 'tamarin.jpg',
            'slug' => 'tamarins',
            'description' => 'Des tamarins de trés bonne qualité, bien savoureux'
        ],

    ];
    
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        for ($i=0; $i < count($this->products); $i++){
            $product = new Fruit();
            $product//->setDescription($this->products[$i]['description'])
            ->setImage($this->products[$i]['image'])
            ->setPrix($this->products[$i]['price'])
            ->setNom($this->products[$i]['name'])
            ->setSlug($this->products[$i]['slug'])
            ;
            
            $manager->persist($product);
        }



        $manager->flush();
    }
}
