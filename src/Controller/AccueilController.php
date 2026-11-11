<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AccueilController extends AbstractController
{
    #[Route('/bonjour/{prenom}', name: 'app_bonjour')]
public function bonjour(string $prenom): Response
{
    return new Response("<h1>Bonjour $prenom ! Bienvenue sur Symfony 7.4</h1>");
}
}
