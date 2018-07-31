<?php

namespace App\DataFixtures;


use App\Entity\Abonne;
use App\Entity\Matches;
use App\Entity\PlaceVendue;
use App\Entity\Reduction;
use App\Entity\Saison;
use App\Entity\Stade;
use App\Entity\Supplement;
use App\Entity\Tarif;
use App\Entity\Tribune;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Data extends Fixture
{
    public function load(ObjectManager $em)
    {
        $stade = new Stade();
        $stade->setNom("Stade Des Costières")->setNombrePlace(15000)->setClub("Nîmes Olympique");
        $stade1 = new Stade();
        $stade1->setNom("Stade Des Costières")->setNombrePlace(15000)->setClub("Nîmes Olympique");

        $saison = new Saison();
        $saison->setAnneeFin(2019)->setAnneeDebut(2018);

        $matchPsg = new Matches();
        $matchPsg->setStade($stade1)->setSaison($saison)->setEquipeExt("PSG")->setDate("1533492552");
        $matchOm = new Matches();
        $matchOm->setStade($stade1)->setSaison($saison)->setEquipeExt("OM")->setDate("1534097352");
        $matchMhsc = new Matches();
        $matchMhsc->setStade($stade1)->setSaison($saison)->setEquipeExt("MHSC")->setDate("1534874952");

        $abonne1 = new Abonne();
        $abonne1->setNumeroAbonnement(1)->setNom("Robert");
        $abonne2 = new Abonne();
        $abonne2->setNumeroAbonnement(2)->setNom("Mouloud");
        $abonne3 = new Abonne();
        $abonne3->setNumeroAbonnement(3)->setNom("Momo");

        $tarif1 = new Tarif();
        $tarif1->setNom("plein_tarif")->setPrix(150);
        $tarif2 = new Tarif();
        $tarif2->setNom("enfant")->setPrix(10);

        $reduction1 = new Reduction();
        $reduction1->setPourcentage(75);
        $reduction2 = new Reduction();
        $reduction2->setPourcentage(20);

        $sup1 = new Supplement();
        $sup1->setPourcentage(0);
        $sup2 = new Supplement();
        $sup2->setPourcentage(5);
        $sup3 = new Supplement();
        $sup3->setPourcentage(10);
        $sup4 = new Supplement();
        $sup4->setPourcentage(15);
        $sup5 = new Supplement();
        $sup5->setPourcentage(25);

        $tribune1 = new Tribune();
        $tribune1->setNom("Nord")->setNombrePlace(2500)->setSupplement($sup1);
        $tribune2 = new Tribune();
        $tribune2->setNom("Sud")->setNombrePlace(2500)->setSupplement($sup2);
        $tribune3 = new Tribune();
        $tribune3->setNom("Ouest")->setNombrePlace(2500)->setSupplement($sup3);
        $tribune4 = new Tribune();
        $tribune4->setNom("Est")->setNombrePlace(2500)->setSupplement($sup4);
        $tribune5 = new Tribune();
        $tribune5->setNom("Vip")->setNombrePlace(2500)->setSupplement($sup5);

        $placevendu = new PlaceVendue();
        $placevendu->setPlaceVendu(200)->setTribune($tribune1)->setMatchs($matchOm);
        $placevendu1 = new PlaceVendue();
        $placevendu1->setPlaceVendu(500)->setTribune($tribune2)->setMatchs($matchOm);
        $placevendu2 = new PlaceVendue();
        $placevendu2->setPlaceVendu(100)->setTribune($tribune3)->setMatchs($matchOm);
        $placevendu3 = new PlaceVendue();
        $placevendu3->setPlaceVendu(600)->setTribune($tribune4)->setMatchs($matchOm);
        $placevendu4 = new PlaceVendue();
        $placevendu4->setPlaceVendu(50)->setTribune($tribune5)->setMatchs($matchOm);

        $placevendu5 = new PlaceVendue();
        $placevendu5->setPlaceVendu(200)->setTribune($tribune1)->setMatchs($matchPsg);
        $placevendu6 = new PlaceVendue();
        $placevendu6->setPlaceVendu(1000)->setTribune($tribune2)->setMatchs($matchPsg);
        $placevendu7 = new PlaceVendue();
        $placevendu7->setPlaceVendu(100)->setTribune($tribune3)->setMatchs($matchPsg);
        $placevendu8 = new PlaceVendue();
        $placevendu8->setPlaceVendu(1600)->setTribune($tribune4)->setMatchs($matchPsg);
        $placevendu9 = new PlaceVendue();
        $placevendu9->setPlaceVendu(550)->setTribune($tribune5)->setMatchs($matchPsg);

        $placevendu10 = new PlaceVendue();
        $placevendu10->setPlaceVendu(1000)->setTribune($tribune1)->setMatchs($matchMhsc);
        $placevendu11 = new PlaceVendue();
        $placevendu11->setPlaceVendu(2500)->setTribune($tribune2)->setMatchs($matchMhsc);
        $placevendu21 = new PlaceVendue();
        $placevendu21->setPlaceVendu(1100)->setTribune($tribune3)->setMatchs($matchMhsc);
        $placevendu31 = new PlaceVendue();
        $placevendu31->setPlaceVendu(1600)->setTribune($tribune4)->setMatchs($matchMhsc);
        $placevendu41 = new PlaceVendue();
        $placevendu41->setPlaceVendu(800)->setTribune($tribune5)->setMatchs($matchMhsc);

        $em->persist($saison);
        $em->persist($stade);
        $em->persist($stade1);
        $em->persist($matchMhsc);
        $em->persist($matchPsg);
        $em->persist($matchOm);
        $em->persist($abonne1);
        $em->persist($abonne2);
        $em->persist($abonne3);
        $em->persist($tarif1);
        $em->persist($tarif2);
        $em->persist($tribune1);
        $em->persist($tribune2);
        $em->persist($tribune3);
        $em->persist($tribune4);
        $em->persist($tribune5);
        $em->persist($sup1);
        $em->persist($sup2);
        $em->persist($sup3);
        $em->persist($sup4);
        $em->persist($sup5);
        $em->persist($reduction1);
        $em->persist($reduction2);
        $em->persist($placevendu);
        $em->persist($placevendu1);
        $em->persist($placevendu2);
        $em->persist($placevendu3);
        $em->persist($placevendu4);
        $em->persist($placevendu5);
        $em->persist($placevendu6);
        $em->persist($placevendu7);
        $em->persist($placevendu8);
        $em->persist($placevendu9);
        $em->persist($placevendu10);
        $em->persist($placevendu11);
        $em->persist($placevendu21);
        $em->persist($placevendu31);
        $em->persist($placevendu41);
        $em->flush();
    }
}
