<?php

namespace App\Tests;

use App\Entity\Abonne;
use App\Entity\Billet;
use App\Entity\Matches;
use App\Entity\Saison;
use App\Entity\Spectateur;
use App\Entity\Stade;
use App\Entity\Supplement;
use App\Entity\Tarif;
use App\Entity\Tribune;
use App\Entity\Traitement\Calcul;
use PHPUnit\Framework\TestCase;

class CalculTest extends TestCase
{
    /**
     * @var Supplement
     */
    public $sup;
    /**
     * @var Tribune
     */
    public $tribune;
    /**
     * @var Spectateur
     */
    public $spec;
    /**
     * @var Abonne
     */
    public $abo;
    /**
     * @var Matches
     */
    public $match;
    /**
     * @var Tarif
     */
    public $tarif;
    /**
     * @var Saison
     */
    public $saison;
    /**
     * @var Stade
     */
    public $stade;
    /**
     * @var Billet
     */
    public $billet;
    /**
     * @var Calcul
     */
    public $calcul;

    protected function setUp()
    {
        parent::setUp();
        $this->sup = new Supplement();
        $this->sup->setPourcentage(10000);

        $this->tribune = new Tribune();
        $this->tribune->setNom("Nord")->setSupplement($this->sup)->setNombrePlace(2500);

        $this->abo = new Abonne();
        $this->abo->setNom("Pierre")->setNumeroAbonnement(1);

        $this->spec = new Spectateur();
        $this->spec->setNom("Pierre")->setPrenom("Menez")->setEmail("pierrot@bwb.com")->setAbonne(null);

        $this->stade = new Stade();
        $this->stade->setNom("Costières")->setNombrePlace(2500)->setClub("Nimes");

        $this->saison = new Saison();
        $this->saison->setAnneeDebut(2018)->setAnneeFin(2019);

        $this->match = new Matches();
        $this->match->setDate(1533038798)->setEquipeExt("OM")->setSaison($this->saison)->setStade($this->stade);

        $this->tarif = new Tarif();
        $this->tarif->setNom("tarif_plein")->setPrix(100);

        $this->billet = new Billet();
        $this->billet->setTribune($this->tribune)->setSpectateur($this->spec)->setTarif($this->tarif)->setMatchs($this->match);

        $this->calcul = new Calcul();
    }

    public function testCalcul()
    {
        $total = $this->calcul->testTotal($this->billet);
        $this->assertEquals(100, $total);
    }
}
