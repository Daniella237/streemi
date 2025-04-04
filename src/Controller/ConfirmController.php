<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ConfirmController extends AbstractController
{
    #[Route('/confirm', name: 'app_confirm')]
    public function confirm(): Response
    {
        return $this->render('confirm.html.twig');
    }
}
