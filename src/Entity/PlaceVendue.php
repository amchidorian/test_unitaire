<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlaceVendueRepository")
 */
class PlaceVendue
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Matches", cascade={"persist", "remove"})
     */
    private $matchs;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Tribune", cascade={"persist", "remove"})
     */
    private $tribune;

    /**
     * @ORM\Column(type="integer")
     */
    private $place_vendu;

    public function getId()
    {
        return $this->id;
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

    public function getTribune(): ?Tribune
    {
        return $this->tribune;
    }

    public function setTribune(?Tribune $tribune): self
    {
        $this->tribune = $tribune;

        return $this;
    }

    public function getPlaceVendu(): ?int
    {
        return $this->place_vendu;
    }

    public function setPlaceVendu(int $place_vendu): self
    {
        $this->place_vendu = $place_vendu;

        return $this;
    }
}
