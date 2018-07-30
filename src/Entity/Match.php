<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MatchRepository")
 */
class Match
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
    private $equipe_ext;

    /**
     * @ORM\Column(type="integer")
     */
    private $place_vendue;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Saison", cascade={"persist", "remove"})
     */
    private $saison;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Spectateur", inversedBy="matches")
     */
    private $spectateur;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Stade", cascade={"persist", "remove"})
     */
    private $stade;

    public function __construct()
    {
        $this->spectateur = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getEquipeExt(): ?string
    {
        return $this->equipe_ext;
    }

    public function setEquipeExt(string $equipe_ext): self
    {
        $this->equipe_ext = $equipe_ext;

        return $this;
    }

    public function getPlaceVendue(): ?int
    {
        return $this->place_vendue;
    }

    public function setPlaceVendue(int $place_vendue): self
    {
        $this->place_vendue = $place_vendue;

        return $this;
    }

    public function getMatchs(): ?Supplement
    {
        return $this->matchs;
    }

    public function setMatchs(?Supplement $matchs): self
    {
        $this->matchs = $matchs;

        return $this;
    }

    public function getSaison(): ?Saison
    {
        return $this->saison;
    }

    public function setSaison(?Saison $saison): self
    {
        $this->saison = $saison;

        return $this;
    }

    /**
     * @return Collection|Spectateur[]
     */
    public function getSpectateur(): Collection
    {
        return $this->spectateur;
    }

    public function addSpectateur(Spectateur $spectateur): self
    {
        if (!$this->spectateur->contains($spectateur)) {
            $this->spectateur[] = $spectateur;
        }

        return $this;
    }

    public function removeSpectateur(Spectateur $spectateur): self
    {
        if ($this->spectateur->contains($spectateur)) {
            $this->spectateur->removeElement($spectateur);
        }

        return $this;
    }

    public function getStade(): ?Stade
    {
        return $this->stade;
    }

    public function setStade(?Stade $stade): self
    {
        $this->stade = $stade;

        return $this;
    }
}
