<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
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
}
