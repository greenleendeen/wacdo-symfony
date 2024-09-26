<?php

namespace App\Entity;

use App\Repository\AffectationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AffectationRepository::class)]
class Affectation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'affectations')]
    private ?User $collaborateur = null;

    #[ORM\ManyToOne]
    private ?Restaurant $restaurant = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Fonction $poste = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $debut_contrat = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fin_contrat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCollaborateur(): ?User
    {
        return $this->collaborateur;
    }

    public function setCollaborateur(?User $collaborateur): static
    {
        $this->collaborateur = $collaborateur;

        return $this;
    }

    public function getRestaurant(): ?Restaurant
    {
        return $this->restaurant;
    }

    public function setRestaurant(?Restaurant $restaurant): static
    {
        $this->restaurant = $restaurant;

        return $this;
    }

    public function getPoste(): ?Fonction
    {
        return $this->poste;
    }

    public function setPoste(?Fonction $poste): static
    {
        $this->poste = $poste;

        return $this;
    }

    public function getDebutContrat(): ?\DateTimeInterface
    {
        return $this->debut_contrat;
    }

    public function setDebutContrat(\DateTimeInterface $debut_contrat): static
    {
        $this->debut_contrat = $debut_contrat;

        return $this;
    }

    public function getFinContrat(): ?\DateTimeInterface
    {
        return $this->fin_contrat;
    }

    public function setFinContrat(\DateTimeInterface $fin_contrat): static
    {
        $this->fin_contrat = $fin_contrat;

        return $this;
    }
}
