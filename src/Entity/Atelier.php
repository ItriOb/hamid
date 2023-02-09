<?php

namespace App\Entity;

use App\Repository\AtelierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
use function Sodium\add;

#[ORM\Entity(repositoryClass: AtelierRepository::class)]
class Atelier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    #[ORM\ManyToOne(inversedBy: 'ateliers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $nomInstructeur = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private array $apprentisInscrits = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getNomInstructeur(): ?User
    {
        return $this->nomInstructeur;
    }

    public function setNomInstructeur(?User $nomInstructeur): self
    {
        $this->nomInstructeur = $nomInstructeur;

        return $this;
    }

    public function getApprentisInscrits(): array
    {
        return $this->apprentisInscrits;
    }

    public function setApprentisInscrits(?array $apprentisInscrits): self
    {
        $this->apprentisInscrits = $apprentisInscrits;

        return $this;
    }

    public function addApprentiInscrit(?int $apprentiInscrit): void
    {


        array_push($this->apprentisInscrits, $apprentiInscrit);

    }

    public function removeApprentiInscrit(?int $apprentiInscrit): void
    {
        $key = array_search($apprentiInscrit, $this->apprentisInscrits);
        if ($key !== false) {
            unset($this->apprentisInscrits[$key]);
        }
    }
}
