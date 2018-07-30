<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MarketController extends Controller
{
    /**
     * @Route("/", name="market")
     *
     */
    public function index()
    {
        return $this->render('market/market.html.twig');
    }
}
