<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MatchesRepository")
 */
class Matches
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
     * @ORM\OneToOne(targetEntity="App\Entity\Saison", cascade={"persist", "remove"})
     */
    private $saison;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Stade", cascade={"persist", "remove"})
     */
    private $stade;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date;

    public function __construct()
    {
        $this->tribunes = new ArrayCollection();
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

    public function getSaison(): ?Saison
    {
        return $this->saison;
    }

    public function setSaison(?Saison $saison): self
    {
        $this->saison = $saison;

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

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }
}
