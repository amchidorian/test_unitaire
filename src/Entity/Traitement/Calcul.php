<?php
/**
 * Created by IntelliJ IDEA.
 * User: dorian
 * Date: 31/07/18
 * Time: 11:35
 */

namespace App\Entity\Traitement;


use App\Entity\Billet;

class Calcul
{
    public function testTotal(Billet $billet)
    {
        $nom_tarif = $billet->getTarif()->getNom();
        $sup = $billet->getTribune()->getSupplement()->getPourcentage();
        $abonne = $billet->getSpectateur()->getAbonne();
        $tarif = $billet->getTarif()->getPrix();
        if ($nom_tarif == "tarif_plein"):
            if (isset($abonne)):
                $billet->setTotal(intval($tarif) * ((100 + intval($sup)) / 100) * .8);
            else:
                $billet->setTotal(intval($tarif) * ((100 + intval($sup)) / 100));
            endif;
        elseif ($nom_tarif == "enfant"):
            $billet->setTotal($billet->getTarif()->getPrix());
        elseif ($nom_tarif == "etudiant"):
            $billet->setTotal($billet->getTarif()->getPrix());
        endif;
        return $billet->getTotal();
    }
}