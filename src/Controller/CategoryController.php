<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function category(): Response
    {
        return $this->render('category.html.twig');
    }

    #[Route('/discover', name: 'app_discover')]
    public function discover(): Response
    {
        return $this->render('discover.html.twig');
    }
}
