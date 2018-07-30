<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StadeRepository")
 */
class Stade
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
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_place;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $club;

    public function getId()
    {
        return $this->id;
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

    public function getNombrePlace(): ?int
    {
        return $this->nombre_place;
    }

    public function setNombrePlace(int $nombre_place): self
    {
        $this->nombre_place = $nombre_place;

        return $this;
    }

    public function getClub(): ?string
    {
        return $this->club;
    }

    public function setClub(string $club): self
    {
        $this->club = $club;

        return $this;
    }
}
