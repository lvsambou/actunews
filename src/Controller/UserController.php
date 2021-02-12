<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class UserController
{
    public function register()
    {
        return new Response("<h1>PAGE INSCRIPTION</h1>");
    }
}