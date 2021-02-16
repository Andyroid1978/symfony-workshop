<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomepageController extends AbstractController
{
    public function home(): Response
    {
        $cards = [
            [
                'title' => 'Card title 0',
                'content' => '0.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.0',
                'createdAt' => new \DateTimeImmutable(),
                'author' => [
                    'name' => 'ryan1',
                    //
                    'imageUrl' => 'assets/img/ryan.jpg',
                ],
            ], // fine card 1
            [
                'title' => 'Card title 1',
                'content' => '1.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.1',
                'createdAt' => new \DateTimeImmutable(),
                'author' => [
                    'name' => 'julie1',
                    //
                    'imageUrl' => 'assets/img/julie.jpg',
                ],
            ], // fine card 2
            [
                'title' => 'Card title 2',
                'content' => '2.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.2',
                'createdAt' => new \DateTimeImmutable(),
                'author' => [
                    'name' => 'julie2',
                    //
                    'imageUrl' => 'assets/img/julie.jpg',
                ],
            ], // fine card 2
            [
                'title' => 'Card title 3',
                'content' => '3.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.3',
                'createdAt' => new \DateTimeImmutable(),
                'author' => [
                    'name' => 'julie3',
                    //
                    'imageUrl' => 'assets/img/julie.jpg',
                ],
            ], // fine card 2

        ];


        $params = [
            'imageUrl' => 'assets/img/ryan.jpg',
            'title' => 'Ryan Scheinder',
            'category' => '@ryan',
            'cards' => $cards,
        ];

        return $this->render('homepage/home.html.twig', $params);
    }
}