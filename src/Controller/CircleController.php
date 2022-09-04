<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class CircleController extends AbstractController
{
  #[Route('/circle/{radius}', name: 'app_circle')]
  public function index(float $radius): JsonResponse {
    $pi = 3.14;
    $area = $radius * $pi; 
    return $this->json(
      [
        'type' => 'circle', 
        'radius' => $radius, 
        'surface' => $area, 
        'circumference' => $area
      ]
    );
  }
}
