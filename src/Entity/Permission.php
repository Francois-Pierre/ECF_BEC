<?php

namespace App\Entity;

use App\Repository\PermissionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PermissionRepository::class)]
class Permission
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $product1 = null;

    #[ORM\Column(length: 255)]
    private ?string $product2 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduct1(): ?string
    {
        return $this->product1;
    }

    public function setProduct1(string $product1): self
    {
        $this->product1 = $product1;

        return $this;
    }

    public function getProduct2(): ?string
    {
        return $this->product2;
    }

    public function setProduct2(string $product2): self
    {
        $this->product2 = $product2;

        return $this;
    }
}
