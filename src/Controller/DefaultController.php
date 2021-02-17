<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * Page d'acceuil
     * http://localhost:8000/
     */
    public function index()
    {
        # On retourne au client une réponse HTTP
        # return new Response("<h1>PAGE D'ACCUEIL</h1>");

        return $this->render('default/index.html.twig');

    }

    /**
     * Page de contact
     * http://localhost:8000/contact
     */

    public function contact(){
        return new Response("<h1>Contactez-nous : </h1>");
    }

    /**
     * Pour afficher la page catégories
     * Nous indiquons son chemin directement dans l'annotation ->
     * @Route("/{alias}", name="default_category", methods={"GET"})
     * ex. localhost:8000/tech
     */
    public function category($alias)
    {
       # return new Response("<h1>CATÉGORIES : $alias</h1>");
        return $this->render('default/category.html.twig');
    }

    /**
     * @Route("/{category}/{alias}_{id}.html", name="default_post", methods={"GET"})
     * ex.localhost:8000/societe/jeunesse-francaise-en-declin_9769.html
     */
    public function post($category, $alias, $id){
        #return new Response("<h1>Page ARTICLES : $alias - $id</h1>");
        return $this->render('default/post.html.twig');
    }
}
