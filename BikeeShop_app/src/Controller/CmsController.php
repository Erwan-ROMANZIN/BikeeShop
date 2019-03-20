<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\CommandeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CmsController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function homepage()
    {
        return $this->render('cms/homepage.html.twig', [
            'controller_name' => 'CmsController',
        ]);
    }

    /**
     * @Route("/commande", name="commande")
     */
    public function commande()
    {
        $commande= new Commande();
        $form = $this->createForm(CommandeType::class, $commande);

        if($form->isSubmitted() && $form->isvalid()){
            return $this->redirectToRoute('commande');

        $this->addFlash('success', 'Vos informations ont bien été enregistré');
        }

        return $this->render('cms/commande.html.twig', [
            'form' => $form->createview(),
        ]);
    }
}
