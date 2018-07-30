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
    private $numero_abonnÃe;

    public function getId()
    {
        return $this->id;
    }

    public function getNumeroAbonnÃe(): ?string
    {
        return $this->numero_abonnÃe;
    }

    public function setNumeroAbonnÃe(string $numero_abonnÃe): self
    {
        $this->numero_abonnÃe = $numero_abonnÃe;

        return $this;
    }
}
