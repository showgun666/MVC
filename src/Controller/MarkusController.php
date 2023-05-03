<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MarkusController extends AbstractController
{
    #[Route("/about", name: "about")]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }
    
    #[Route("/report", name: "report")]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }

    #[Route("/", name: "home")]
    public function me(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route("/lucky", name: "lucky")]
    public function lucky(): Response
    {
        // Lista med quotes
        $quotes = array(
            "The greatest glory in living lies not in never falling, but in rising every time we fall. -Nelson Mandela",
            "The way to get started is to quit talking and begin doing. -Walt Disney",
            "Your time is limited, don't waste it living someone else's life. -Steve Jobs",
            "If life were predictable it would cease to be life, and be without flavor. -Eleanor Roosevelt",
            "If you look at what you have in life, you'll always have more. -Oprah Winfrey",
            "If you set your goals ridiculously high and it's a failure, you will fail above everyone else's success. -James Cameron",
            "Life is what happens when you're busy making other plans. -John Lennon",
            "Spread love everywhere you go. Let no one ever come to you without leaving happier. -Mother Teresa",
            "The best and most beautiful things in the world cannot be seen or even touched - they must be felt with the heart. -Helen Keller",
            "It is during our darkest moments that we must focus to see the light. -Aristotle"
        );

        // Slumpa ett värde ur array
        $quote = $quotes[array_rand($quotes)];

        // Skicka med quote som 'quote' vid rendering
        return $this->render('lucky.html.twig', [
            'quote' => $quote
        ]);
    }
}
