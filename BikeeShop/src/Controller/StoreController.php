<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/store", name="store_")
 */
class StoreController extends AbstractController
{
    /**
     * @Route("/product/{id}/details/{slug}", name="product-detail", requirements={"id" = "\d+"})
     */
    public function store(int $id, String $slug)
    {

        return $this->render('store/product-detail.html.twig', [
            'controller_name' => 'StoreController',
            'id'=> $id,
            'slug'=> $slug,
        ]);
    }

    /**
     * @Route("/product/list", name="product-list")
     */
    public function list()
    {
        return $this->render('store/product-list.html.twig', [
            'controller_name' => 'StoreController',
        ]);
    }
}
