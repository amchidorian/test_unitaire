<?php

namespace App\Controller;

use App\Entity\Matches;
use App\Entity\Tarif;
use App\Entity\Tribune;
use App\Repository\MatchesRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\ChoiceList\ORMQueryBuilderLoader;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MarketController extends Controller
{
    private $qb;
    private $em;

    function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        $this->qb = $this->em->createQueryBuilder();
    }

    /**
     * @Route("/", name="market")
     *
     */
    public function index()
    {
        dump($this->getDoctrine()->getRepository(Tribune::class)->getPlaceTribune(6));
        return $this->render('market/market.html.twig',
            array(
                "matchs" => $this->getMatchs(),
                "tribunes" => $this->getTribunes(),
                "tarifs" => $this->getTarifs()
            ));
    }

    /**
     * @return mixed
     */
    protected function getMatchs()
    {
        return $this->getDoctrine()->getRepository(Matches::class)->getMatchs();
    }

    protected function getTribunes(){
        return $this->getDoctrine()->getRepository(Tribune::class)->getTribunes();
    }

    protected function getTarifs(){
        return $this->getDoctrine()->getRepository(Tarif::class)->getTarifs();
    }
}
