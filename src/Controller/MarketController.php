<?php

namespace App\Controller;

use App\Entity\Matches;
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
        return $this->render('market/market.html.twig', array("matchs" => $this->getMatchs()));
    }

    /**
     * @return mixed
     */
    protected function getMatchs()
    {
        return $this->getDoctrine()->getRepository(Matches::class)->getMatchs();
    }
}
