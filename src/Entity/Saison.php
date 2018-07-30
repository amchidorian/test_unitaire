<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SaisonRepository")
 */
class Saison
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
    private $annee_debut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $annee_fin;

    public function getId()
    {
        return $this->id;
    }

    public function getAnneeDebut(): ?int
    {
        return $this->annee_debut;
    }

    public function setAnneeDebut(int $annee_debut): self
    {
        $this->annee_debut = $annee_debut;

        return $this;
    }

    public function getAnneeFin(): ?string
    {
        return $this->annee_fin;
    }

    public function setAnneeFin(string $annee_fin): self
    {
        $this->annee_fin = $annee_fin;

        return $this;
    }
}
