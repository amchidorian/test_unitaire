<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MarketController extends Controller
{
    /**
     * @Route("/market", name="market")
     */
    public function index()
    {
        return $this->render('market/index.html.twig', [
            'controller_name' => 'MarketController',
        ]);
    }
}
