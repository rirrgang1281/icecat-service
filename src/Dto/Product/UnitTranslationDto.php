<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use JMS\Serializer\Annotation as Serializer;

class UnitTranslationDto
{
    #[Serializer\SerializedName('shortCode')]
    private ?string $shortCode = null;

    #[Serializer\SerializedName('name')]
    private ?string $name = null;

    #[Serializer\SerializedName('unitId')]
    private ?string $unitId = null;

    #[Serializer\SerializedName('unit')]
    private ?string $languageId = null;

    #[Serializer\SerializedName('')]
    private ?UnitDto $unit = null;

    #[Serializer\SerializedName('language')]
    private ?LanguageDto $language = null;

    public function getShortCode(): ?string
    {
        return $this->shortCode;
    }

    public function setShortCode(?string $shortCode): self
    {
        $this->shortCode = $shortCode;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUnitId(): ?string
    {
        return $this->unitId;
    }

    public function setUnitId(?string $unitId): self
    {
        $this->unitId = $unitId;

        return $this;
    }

    public function getLanguageId(): ?string
    {
        return $this->languageId;
    }

    public function setLanguageId(?string $languageId): self
    {
        $this->languageId = $languageId;

        return $this;
    }

    public function getUnit(): ?UnitDto
    {
        return $this->unit;
    }

    public function setUnit(?UnitDto $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    public function getLanguage(): ?LanguageDto
    {
        return $this->language;
    }

    public function setLanguage(?LanguageDto $language): self
    {
        $this->language = $language;

        return $this;
    }
}
