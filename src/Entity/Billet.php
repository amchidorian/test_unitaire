<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BilletRepository")
 */
class Billet
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Spectateur", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $spectateur;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Tribune", cascade={"persist", "remove"})
     */
    private $tribune;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Tarif", cascade={"persist", "remove"})
     */
    private $tarif;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Matches", cascade={"persist", "remove"})
     */
    private $matchs;

    /**
     * @ORM\Column(type="integer")
     */
    private $total;

    public function getId()
    {
        return $this->id;
    }

    public function getSpectateur(): ?Spectateur
    {
        return $this->spectateur;
    }

    public function setSpectateur(Spectateur $spectateur): self
    {
        $this->spectateur = $spectateur;

        return $this;
    }

    public function getTribune(): ?Tribune
    {
        return $this->tribune;
    }

    public function setTribune(?Tribune $tribune): self
    {
        $this->tribune = $tribune;

        return $this;
    }

    public function getTarif(): ?Tarif
    {
        return $this->tarif;
    }

    public function setTarif(?Tarif $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getMatchs(): ?Matches
    {
        return $this->matchs;
    }

    public function setMatchs(?Matches $matchs): self
    {
        $this->matchs = $matchs;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }
}
