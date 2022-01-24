<?php

namespace App\Controller;

class ProfileController extends AbstractController
{
    public function profile()
    {
        return $this->twig->render('Profile/profile.html.twig');
    }
}
