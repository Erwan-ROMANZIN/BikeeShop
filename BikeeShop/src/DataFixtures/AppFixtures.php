<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\Product;
use App\Entity\Image;

class AppFixtures extends Fixture
{

    private $manager;

    public function load(ObjectManager $manager)
    {
        $this->manager = $manager;
        $this->loadImages();
        $this->loadProducts();
    }

    private function loadImages()
    {
        for ($i = 1; $i < 15; $i++) {
            $image = (new Image())
                ->setUrl('shoe-'.$i.'.jpg')
                ->setAlt('Shoe '.$i);

            $this->manager->persist($image);
            $this->addReference('image'.$i, $image);
        }

        $this->manager->flush();
    }

    private function loadProducts()
    {
        for ($i = 1; $i < 15; $i++) {
            $product = (new Product())
                ->setName('Produit '.$i)
                ->setDescription('Produit de description '.$i)
                ->setSlug('produit-'.$i)
                ->setImage($this->getReference('image'.$i))
                ->setPrice(mt_rand(10, 100));   

            $this->manager->persist($product);
            $this->addReference('product'.$i, $product);
        }

        $this->manager->flush();
    }
}