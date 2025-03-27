<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DetailsController extends AbstractController
{
    #[Route('/film/{id}', name: 'app_detail_film')]
    public function filmDetail(int $id): Response
    {
        return $this->render('detail.html.twig', [
            'id' => $id,
        ]);
    }

    #[Route('/serie/{id}', name: 'app_detail_serie')]
    public function serieDetail(int $id): Response
    {
        return $this->render('detail_serie.html.twig', [
            'id' => $id,
        ]);
    }
}
