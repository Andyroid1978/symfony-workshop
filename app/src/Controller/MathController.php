<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class MathController extends AbstractController
{

    public function sum(int $value1, int $value2): JsonResponse
    {
        $resp = [
            'value1' => $value1,
            'value2' => $value2,
            'sum' => $value1 + $value2,
        ];

        return new JsonResponse($resp);
    }
}