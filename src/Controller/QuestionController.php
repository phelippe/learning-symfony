<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
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
        $answers = [
            'an 1',
            'an 2',
            'an 3',
        ];

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,
        ]);
    }
}
