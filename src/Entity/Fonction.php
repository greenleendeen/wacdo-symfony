<?php

namespace App\Entity;

use App\Repository\FonctionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FonctionRepository::class)]
class Fonction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $intitule_poste = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntitulePoste(): ?string
    {
        return $this->intitule_poste;
    }

    public function setIntitulePoste(string $intitule_poste): static
    {
        $this->intitule_poste = $intitule_poste;

        return $this;
    }
}
