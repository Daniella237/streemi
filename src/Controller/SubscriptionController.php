<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SubscriptionController extends AbstractController
{
    #[Route('/subscriptions', name: 'app_subscriptions')]
    public function subscriptions(): Response
    {
        return $this->render('subscriptions.html.twig');
    }

    #[Route('/upload', name: 'app_upload')]
    public function upload(): Response
    {
        return $this->render('upload.html.twig');
    }

    #[Route('/lists', name: 'app_my_lists')]
    public function lists(): Response
    {
        return $this->render('lists.html.twig');
    }
}
