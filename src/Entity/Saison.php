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
     * @ORM\Column(type="integer")
     */
    private $annee_fin;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_abonnements;

    public function getId()
    {
        return $this->id;
    }

    public function getAnneeDebut(): ?array
    {
        return $this->annee_debut;
    }

    public function setAnneeDebut(array $annee_debut): self
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

    public function getNombreAbonnements(): ?int
    {
        return $this->nombre_abonnements;
    }

    public function setNombreAbonnements(int $nombre_abonnements): self
    {
        $this->nombre_abonnements = $nombre_abonnements;

        return $this;
    }
}
