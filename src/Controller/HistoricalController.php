<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HistoricalController extends AbstractController
{
    #[Route('/historical', name: 'app_historical')]
    public function index(): Response
    {
        return $this->render('historical/index.html.twig', [
            'controller_name' => 'HistoricalController',
        ]);
    }
}
