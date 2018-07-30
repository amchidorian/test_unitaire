<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AbonneRepository")
 */
class Abonne
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero_abonnement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    public function getId()
    {
        return $this->id;
    }

    public function getNumeroAbonnement(): ?int
    {
        return $this->numero_abonnement;
    }

    public function setNumeroAbonnement(int $numero_abonnement): self
    {
        $this->numero_abonnement = $numero_abonnement;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
}
