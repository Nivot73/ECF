<?php

namespace App\Entity;

use App\Repository\SeanceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeanceRepository::class)]
class Seance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $Prix = null;

    #[ORM\Column(length: 255)]
    private ?string $Caracteristique = null;

    #[ORM\ManyToOne(inversedBy: 'seances')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Film $Film = null;

    #[ORM\ManyToOne(inversedBy: 'seances')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Salle $Salle = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?float
    {
        return $this->Prix;
    }

    public function setPrix(float $Prix): static
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getCaracteristique(): ?string
    {
        return $this->Caracteristique;
    }

    public function setCaracteristique(string $Caracteristique): static
    {
        $this->Caracteristique = $Caracteristique;

        return $this;
    }

    public function getFilm(): ?Film
    {
        return $this->Film;
    }

    public function setFilm(?Film $Film): static
    {
        $this->Film = $Film;

        return $this;
    }

    public function getSalle(): ?Salle
    {
        return $this->Salle;
    }

    public function setSalle(?Salle $Salle): static
    {
        $this->Salle = $Salle;

        return $this;
    }
}
