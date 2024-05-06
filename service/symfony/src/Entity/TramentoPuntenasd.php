<?php

namespace App\Entity;

use App\Repository\TramentoPuntenasdRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TramentoPuntenasdRepository::class)]
class TramentoPuntenasd
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $naam = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $modaliteit = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $line = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $line_selected = null;

    #[ORM\Column(nullable: true)]
    private ?int $radius = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $label = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $geom = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNaam(): ?string
    {
        return $this->naam;
    }

    public function setNaam(?string $naam): static
    {
        $this->naam = $naam;

        return $this;
    }

    public function getModaliteit(): ?string
    {
        return $this->modaliteit;
    }

    public function setModaliteit(?string $modaliteit): static
    {
        $this->modaliteit = $modaliteit;

        return $this;
    }

    public function getLine(): ?string
    {
        return $this->line;
    }

    public function setLine(?string $line): static
    {
        $this->line = $line;

        return $this;
    }

    public function getLineSelected(): ?string
    {
        return $this->line_selected;
    }

    public function setLineSelected(?string $line_selected): static
    {
        $this->line_selected = $line_selected;

        return $this;
    }

    public function getRadius(): ?int
    {
        return $this->radius;
    }

    public function setRadius(?int $radius): static
    {
        $this->radius = $radius;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getGeom(): ?string
    {
        return $this->geom;
    }

    public function setGeom(?string $geom): static
    {
        $this->geom = $geom;

        return $this;
    }
}
