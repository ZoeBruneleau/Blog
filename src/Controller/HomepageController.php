<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function home()
    {
        return new Response( content : 'Test');

    }
    /**
     * @Route("/contact")
     */
    public function contact() : Response
    {
        return new Response( content : 'contact');

    }

    /**
     * @Route("hello/{firstname<[A-Z-a-z]+>}/{lastname<[A-Z-a-z]+>}")
     */
    public function hello(string $firstname, string $lastname) : Response
    {
        return new Response(sprintf('Coucou %s %s', $firstname, $lastname));

    }

}