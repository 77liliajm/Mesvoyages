<?php

namespace App\Controller;

use App\Repository\VisiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VoyagesController extends AbstractController
{
    #[Route('/voyages', name: 'app_voyages')]
    public function index(VisiteRepository $visiteRepository): Response
    {
        // Récupère toutes les visites de la base de données
        $visites = $visiteRepository->findAll();
        
        // Envoie les visites à la vue Twig
        return $this->render('voyages/index.html.twig', [
            'visites' => $visites,
        ]);
    }
}
