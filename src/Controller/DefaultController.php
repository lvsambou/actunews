<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    /**
     * Page d'acceuil
     * http://localhost:8000/
     */
    public function index()
    {
        # On retourne au client une réponse HTTP
        return new Response("<h1>PAGE D'ACCUEIL</h1>");
    }

    /**
     * Page de contact
     * http://localhost:8000/contact
     */

    public function contact(){
        return new Response("<h1>Contactez-nous : </h1>");
    }
}
