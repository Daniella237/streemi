<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AdminControllerPhpController extends AbstractController
{

    #[Route('/admin', name: 'app_admin')]
    public function admin(): Response
    {
        return $this->render('admin.html.twig');
    }

    #[Route('/admin/users', name: 'app_admin_users')]
    public function adminUsers(): Response
    {
        return $this->render('admin_users.html.twig');
    }

    #[Route('/admin/films', name: 'app_admin_films')]
    public function adminFilms(): Response
    {
        return $this->render('admin_films.html.twig');
    }

    #[Route('/admin/films/add', name: 'app_admin_add_films')]
    public function adminAddFilms(): Response
    {
        return $this->render('admin_add_films.html.twig');
    }
}
