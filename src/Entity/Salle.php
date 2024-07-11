<?php

namespace App\Entity;

use App\Repository\SalleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SalleRepository::class)]
class Salle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column]
    private ?int $Siege = null;

    #[ORM\Column(length: 255)]
    private ?string $Caracteristique = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Probleme = null;

    #[ORM\OneToMany(targetEntity: Seance::class, mappedBy: 'Salle', orphanRemoval: true)]
    private Collection $seances;

    #[ORM\ManyToOne(inversedBy: 'salles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cinema $Cinema = null;

    public function __construct()
    {
        $this->seances = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getSiege(): ?int
    {
        return $this->Siege;
    }

    public function setSiege(int $Siege): static
    {
        $this->Siege = $Siege;

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

    public function getProbleme(): ?string
    {
        return $this->Probleme;
    }

    public function setProbleme(?string $Probleme): static
    {
        $this->Probleme = $Probleme;

        return $this;
    }

    /**
     * @return Collection<int, Seance>
     */
    public function getSeances(): Collection
    {
        return $this->seances;
    }

    public function addSeance(Seance $seance): static
    {
        if (!$this->seances->contains($seance)) {
            $this->seances->add($seance);
            $seance->setSalle($this);
        }

        return $this;
    }

    public function removeSeance(Seance $seance): static
    {
        if ($this->seances->removeElement($seance)) {
            // set the owning side to null (unless already changed)
            if ($seance->getSalle() === $this) {
                $seance->setSalle(null);
            }
        }

        return $this;
    }

    public function getCinema(): ?Cinema
    {
        return $this->Cinema;
    }

    public function setCinema(?Cinema $Cinema): static
    {
        $this->Cinema = $Cinema;

        return $this;
    }
}
