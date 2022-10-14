<?php

namespace App\Entity;

use App\Repository\PartnerPermissionsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PartnerPermissionsRepository::class)]
class PartnerPermissions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $manage_planning = null;

    #[ORM\Column]
    private ?bool $send_newsletter = null;

    #[ORM\Column]
    private ?bool $sell_drinks = null;

    #[ORM\Column(length: 255)]
    private ?string $competition = null;

    #[ORM\Column(length: 255)]
    private ?string $zumba_lesson = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isManagePlanning(): ?bool
    {
        return $this->manage_planning;
    }

    public function setManagePlanning(bool $manage_planning): self
    {
        $this->manage_planning = $manage_planning;

        return $this;
    }

    public function isSendNewsletter(): ?bool
    {
        return $this->send_newsletter;
    }

    public function setSendNewsletter(bool $send_newsletter): self
    {
        $this->send_newsletter = $send_newsletter;

        return $this;
    }

    public function isSellDrinks(): ?bool
    {
        return $this->sell_drinks;
    }

    public function setSellDrinks(bool $sell_drinks): self
    {
        $this->sell_drinks = $sell_drinks;

        return $this;
    }

    public function getCompetition(): ?string
    {
        return $this->competition;
    }

    public function setCompetition(string $competition): self
    {
        $this->competition = $competition;

        return $this;
    }

    public function getZumbaLesson(): ?string
    {
        return $this->zumba_lesson;
    }

    public function setZumbaLesson(string $zumba_lesson): self
    {
        $this->zumba_lesson = $zumba_lesson;

        return $this;
    }
}
