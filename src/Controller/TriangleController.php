<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class TriangleController extends AbstractController {
  #[Route('/triangle/{a}/{b}/{h}', name: 'app_triangle')]
  public function index(float $a, float $b, float $h): JsonResponse {
    $circumference = ($b + $a + $h);
    $surface = (($b * $h) / 2);
    return $this->json(
      [
        'type' => 'triangle', 
        'A' => $a, 
        'b' => $b, 
        'h' => $h, 
        'surface' => $surface, 
        'circumference' => $circumference
      ]
    );
  }
}
