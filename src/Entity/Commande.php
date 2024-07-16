<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $Prix = null;

    #[ORM\Column(nullable: true)]
    private ?float $Note = null;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $User = null;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'seance')]
    #[ORM\JoinColumn(nullable: false)]
    private ?self $Seance = null;

    #[ORM\OneToMany(targetEntity: self::class, mappedBy: 'Seance', orphanRemoval: true)]
    private Collection $seance;

    #[ORM\Column(length: 255)]
    private ?string $Reservation = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date = null;

    public function __construct()
    {
        $this->seance = new ArrayCollection();
    }

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

    public function getNote(): ?float
    {
        return $this->Note;
    }

    public function setNote(?float $Note): static
    {
        $this->Note = $Note;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): static
    {
        $this->User = $User;

        return $this;
    }

    public function getSeance(): ?self
    {
        return $this->Seance;
    }

    public function setSeance(?self $Seance): static
    {
        $this->Seance = $Seance;

        return $this;
    }

    public function addSeance(self $seance): static
    {
        if (!$this->seance->contains($seance)) {
            $this->seance->add($seance);
            $seance->setSeance($this);
        }

        return $this;
    }

    public function removeSeance(self $seance): static
    {
        if ($this->seance->removeElement($seance)) {
            // set the owning side to null (unless already changed)
            if ($seance->getSeance() === $this) {
                $seance->setSeance(null);
            }
        }

        return $this;
    }

    public function getReservation(): ?string
    {
        return $this->Reservation;
    }

    public function setReservation(string $Reservation): static
    {
        $this->Reservation = $Reservation;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): static
    {
        $this->Date = $Date;

        return $this;
    }
}
