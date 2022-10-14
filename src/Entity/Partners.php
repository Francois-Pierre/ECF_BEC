<?php

namespace App\Entity;

use App\Repository\PartnersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PartnersRepository::class)]
class Partners
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'mother_partner', targetEntity: Structures::class, orphanRemoval: true)]
    private Collection $associated_structures;

    public function __construct()
    {
        $this->associated_structures = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Structures>
     */
    public function getAssociatedStructures(): Collection
    {
        return $this->associated_structures;
    }

    public function addAssociatedStructure(Structures $associatedStructure): self
    {
        if (!$this->associated_structures->contains($associatedStructure)) {
            $this->associated_structures->add($associatedStructure);
            $associatedStructure->setMotherPartner($this);
        }

        return $this;
    }

    public function removeAssociatedStructure(Structures $associatedStructure): self
    {
        if ($this->associated_structures->removeElement($associatedStructure)) {
            // set the owning side to null (unless already changed)
            if ($associatedStructure->getMotherPartner() === $this) {
                $associatedStructure->setMotherPartner(null);
            }
        }

        return $this;
    }
}
