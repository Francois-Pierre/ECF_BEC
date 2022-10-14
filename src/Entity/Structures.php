<?php

namespace App\Entity;

use App\Repository\StructuresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StructuresRepository::class)]
class Structures
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\ManyToOne(inversedBy: 'associated_structures')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Partners $mother_partner = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getMotherPartner(): ?Partners
    {
        return $this->mother_partner;
    }

    public function setMotherPartner(?Partners $mother_partner): self
    {
        $this->mother_partner = $mother_partner;

        return $this;
    }
}
