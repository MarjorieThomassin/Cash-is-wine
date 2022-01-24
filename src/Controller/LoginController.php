<?php

namespace App\Controller;

class LoginController extends AbstractController
{
    public function login()
    {
        return $this->twig->render('Login/login.html.twig');
    }

    public function register()
    {
        return $this->twig->render('Login/register.html.twig');
    }
}
