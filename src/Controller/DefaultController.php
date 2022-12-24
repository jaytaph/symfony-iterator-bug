<?php

namespace App\Controller;

use App\Service\Queue;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/')]
    public function index(Queue $queue): Response
    {
        return new Response('Hello World!');
    }
}
