<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/",name="home")
     */
    public function homepage()
    {
        return new Response(" homepage of Question Controller");
    }

    /**
     * @Route("/questions/{slug}",name="howto")
     */
    public function show($slug)
    {
        return new Response(
            sprintf("how to page %s", ucwords(str_replace('-', ' ', $slug)))
        );
    }
}
