<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('index.html.twig' );
    }

    #[Route('/admin_add_films', name: 'app_admin_add_films')]
    public function AdminAddFilms(): Response
    {
        return $this->render('admin_add_films.html.twig' );
    }

    #[Route('/admin_films', name: 'app_admin_films')]

    public function AdminFilms(): Response
    {
        return $this->render('admin_films.html.twig' );
    }

    #[Route('/admin_users', name: 'app_admin_users')]
    public function AdminUsers(): Response
    {
        return $this->render('admin_users.html.twig' );
    }

    #[Route('/admin', name: 'app_admin')]
    public function Admin(): Response
    {
        return $this->render('admin.html.twig' );
    }

    #[Route('/category', name: 'app_category')]
    public function Category(): Response
    {
        return $this->render('category.html.twig' );
    }

    #[Route('/confirm', name: 'app_confirm')]
    public function Confirm(): Response
    {
        return $this->render('confirm.html.twig' );
    }

    #[Route('/detail_serie', name: 'app_detail_serie')]
    public function DetailSerie(): Response
    {
        return $this->render('detail_serie.html.twig' );
    }

    #[Route('/detail', name: 'app_detail')]
    public function Detail(): Response
    {
        return $this->render('detail.html.twig' );
    }

    #[Route('/discover', name: 'app_discover')]
    public function Discover(): Response
    {
        return $this->render('discover.html.twig' );
    }

    #[Route('/forgot', name: 'app_forgot')]
    public function Forgot(): Response
    {
        return $this->render('forgot.html.twig' );
    }

    #[Route('/lists', name: 'app_lists')]
    public function Lists(): Response
    {
        return $this->render('lists.html.twig' );
    }

    #[Route('/login', name: 'app_login')]
    public function Login(): Response
    {
        return $this->render('login.html.twig' );
    }

    #[Route('/register', name: 'app_register')]
    public function Register(): Response
    {
        return $this->render('register.html.twig' );
    }

    #[Route('/reset', name: 'app_reset')]
    public function Reset(): Response
    {
        return $this->render('reset.html.twig' );
    }

    #[Route('/subscriptions', name: 'app_subscriptions')]
    public function Subscriptions(): Response
    {
        return $this->render('subscriptions.html.twig' );
    }

    #[Route('/upload', name: 'app_upload')]
    public function Upload(): Response
    {
        return $this->render('upload.html.twig' );
    }
}
