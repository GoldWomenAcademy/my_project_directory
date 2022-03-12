<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloMonController extends AbstractController
{
    #[Route('/hello/mon', name: 'app_hello_mon')]
    public function index(): Response
    {
        return $this->render('hello_mon/index.html.twig', [
            'controller_name' => 'HelloMonController',
        ]);
    }
}
