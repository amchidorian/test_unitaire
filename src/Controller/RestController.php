<?php

namespace App\Controller;

use App\Entity\PlaceVendue;
use App\Entity\Tarif;
use App\Entity\Tribune;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RestController extends Controller
{
    /**
     * @Route("/rest", name="rest")
     */
    public function index()
    {
        return $this->render('rest/index.html.twig', [
            'controller_name' => 'RestController',
        ]);
    }

    /**
     * @Route("/rest/tribune", name="palce_restante")
     * @param Request $datas
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function place_restante(Request $datas)
    {
        $tribune = $datas->request->get('tribune');
        $match = $datas->request->get('match');
        $total_place = $this->getDoctrine()->getRepository(Tribune::class)->getPlaceTribune($tribune);
        $place_vendu = $this->getDoctrine()->getRepository(PlaceVendue::class)->getPlaceTribune($tribune, $match);
        $place_restante = $total_place[0]->getNombrePlace() - $place_vendu[0]->getPlaceVendu();
        return $this->json(array('place' => $place_restante), 200);
    }

    /**
     * @Route("/rest/total", name="palce_restante")
     */
    public function total(){
        $tarif = $this->getDoctrine()->getRepository(Tarif::class)->getTarif($datas->request->get('tarif'))[0]->getPrix();
        $abonnee =
    }
}
