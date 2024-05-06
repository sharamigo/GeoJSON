<?php

namespace App\Entity;

use App\Repository\AirportsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AirportsRepository::class)]
class Airports
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $scalerank = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $featurecla = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $abbrev = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $locaction = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $gps_code = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $iata_code = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $wikipedia = null;

    #[ORM\Column(nullable: true)]
    private ?int $natlscale = null;

    #[ORM\Column(nullable: true)]
    private ?int $cartodb_id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updated_at = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $geom = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScalerank(): ?int
    {
        return $this->scalerank;
    }

    public function setScalerank(?int $scalerank): static
    {
        $this->scalerank = $scalerank;

        return $this;
    }

    public function getFeaturecla(): ?string
    {
        return $this->featurecla;
    }

    public function setFeaturecla(?string $featurecla): static
    {
        $this->featurecla = $featurecla;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getAbbrev(): ?string
    {
        return $this->abbrev;
    }

    public function setAbbrev(?string $abbrev): static
    {
        $this->abbrev = $abbrev;

        return $this;
    }

    public function getLocaction(): ?string
    {
        return $this->locaction;
    }

    public function setLocaction(?string $locaction): static
    {
        $this->locaction = $locaction;

        return $this;
    }

    public function getGpsCode(): ?string
    {
        return $this->gps_code;
    }

    public function setGpsCode(?string $gps_code): static
    {
        $this->gps_code = $gps_code;

        return $this;
    }

    public function getIataCode(): ?string
    {
        return $this->iata_code;
    }

    public function setIataCode(?string $iata_code): static
    {
        $this->iata_code = $iata_code;

        return $this;
    }

    public function getWikipedia(): ?string
    {
        return $this->wikipedia;
    }

    public function setWikipedia(?string $wikipedia): static
    {
        $this->wikipedia = $wikipedia;

        return $this;
    }

    public function getNatlscale(): ?int
    {
        return $this->natlscale;
    }

    public function setNatlscale(?int $natlscale): static
    {
        $this->natlscale = $natlscale;

        return $this;
    }

    public function getCartodbId(): ?int
    {
        return $this->cartodb_id;
    }

    public function setCartodbId(?int $cartodb_id): static
    {
        $this->cartodb_id = $cartodb_id;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTimeInterface $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $updated_at): static
    {
        $this->updated_at = $updated_at;

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
