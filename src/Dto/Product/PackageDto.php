<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use JMS\Serializer\Annotation as Serializer;

class PackageDto
{
    #[Serializer\SerializedName('girth')]
    private ?float $girth = null;

    #[Serializer\SerializedName('width')]
    private float $width;

    #[Serializer\SerializedName('height')]
    private float $height;

    #[Serializer\SerializedName('length')]
    private float $length;

    #[Serializer\SerializedName('weight')]
    private float $weight;

    #[Serializer\SerializedName('volume')]
    private ?float $volume = null;

    #[Serializer\SerializedName('sizeUnit')]
    private string $sizeUnit;

    #[Serializer\SerializedName('weightUnit')]
    private string $weightUnit;

    public function getGirth(): ?float
    {
        return $this->girth;
    }

    public function setGirth(?float $girth): self
    {
        $this->girth = $girth;

        return $this;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function setWidth(float $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function setHeight(float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getLength(): float
    {
        return $this->length;
    }

    public function setLength(float $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getVolume(): ?float
    {
        return $this->volume;
    }

    public function setVolume(?float $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    public function getSizeUnit(): string
    {
        return $this->sizeUnit;
    }

    public function setSizeUnit(string $sizeUnit): self
    {
        $this->sizeUnit = $sizeUnit;

        return $this;
    }

    public function getWeightUnit(): string
    {
        return $this->weightUnit;
    }

    public function setWeightUnit(string $weightUnit): self
    {
        $this->weightUnit = $weightUnit;

        return $this;
    }
}
