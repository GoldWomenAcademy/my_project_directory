<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VousController extends AbstractController
{
    #[Route('/vous', name: 'app_vous')]
    public function index(): Response
    {
        return $this->render('vous/index.html.twig', [
            'controller_name' => 'VousController',
        ]);
    }
}
