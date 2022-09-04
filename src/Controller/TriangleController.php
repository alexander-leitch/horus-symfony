<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TriangleController extends AbstractController
{
    #[Route('/triangle', name: 'app_triangle')]
    public function index(): Response
    {
        return $this->render('triangle/index.html.twig', [
            'controller_name' => 'TriangleController',
        ]);
    }
}
