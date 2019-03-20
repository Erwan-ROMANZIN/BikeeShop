<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use App\Entity\Product;

class StoreController extends AbstractController
{
    
    /**
     * @Route("/products", name="products", methods={"GET"})
     * @return JsonResponse
     */
    public function list(SerializerInterface $serializer)
    {
        $repository = $this->getDoctrine()->getRepository(Product::class);
       $data = $repository->findAll();
       $d = $serializer->serialize($data, 'json');

        return new Response($d);
    }

    /**
     * @Route("/product/{id}", name="product", methods={"GET"})
     * @return JsonResponse
     */
    public function detail(SerializerInterface $serializer)
    {
       
    }

    /**
     * @Route("/panier", name="panier", methods={"GET"})
     * @return JsonResponse
     */
    public function panier(SerializerInterface $serializer)
    {
       
    }
}
