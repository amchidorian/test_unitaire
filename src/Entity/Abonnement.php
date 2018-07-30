<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AbonnementRepository")
 */
class Abonnement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numero_abonn�e;

    public function getId()
    {
        return $this->id;
    }

    public function getNumeroAbonn�e(): ?string
    {
        return $this->numero_abonn�e;
    }

    public function setNumeroAbonn�e(string $numero_abonn�e): self
    {
        $this->numero_abonn�e = $numero_abonn�e;

        return $this;
    }
}
