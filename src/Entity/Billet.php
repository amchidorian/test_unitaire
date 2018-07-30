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
     * @ORM\Column(type="string", length=255)
     */
    private $numero;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Spectateur", inversedBy="billet", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $spectateur;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\ZoneStade", cascade={"persist", "remove"})
     */
    private $tribune;

    public function getId()
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
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

    public function getTribune(): ?ZoneStade
    {
        return $this->tribune;
    }

    public function setTribune(?ZoneStade $tribune): self
    {
        $this->tribune = $tribune;

        return $this;
    }
}
