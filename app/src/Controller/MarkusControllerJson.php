<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MarkusControllerJson extends AbstractController
{
    #[Route("api/quote", name: "quote")]
    public function quote(): Response
    {
        // Lista med quotes
        $quotes = array(
            "I'll be back. -The Terminator",
            "May the Force be with you. -Star Wars",
            "Hasta la vista, baby. -Terminator 2: Judgment Day",
            "There's no place like home. -The Wizard of Oz",
            "I'm king of the world! -Titanic",
            "I am your father. -Star Wars: Episode V - The Empire Strikes Back",
            "Here's looking at you, kid. -Casablanca",
            "To infinity and beyond! -Toy Story",
            "You can't handle the truth! -A Few Good Men",
            "Why so serious? -The Dark Knight"
        );

        // Slumpa ett värde ur array
        $quote = $quotes[array_rand($quotes)];

        // Skapa en timestamp
        $timestamp = time();

        // skapa en array med den data som ska med i json responsen
        $data = array(
            'quote' => $quote,
            'date' => date('Y-m-d'),
            'timestamp' => $timestamp,
        );

        // Gör om array till json-format
        $json = json_encode($data);

        // Skapa ett response med vår jsondata
        $response = new Response($json);

        // Skicka json som json
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
