<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use JMS\Serializer\Annotation as Serializer;

class TranslationDto
{
    #[Serializer\SerializedName('metaDescription')]
    #[Serializer\Exclude(if: 'object.getMetaDescription() === null')]
    private ?string $metaDescription = null;

    #[Serializer\SerializedName('name')]
    #[Serializer\Exclude(if: 'object.getName() === null')]
    private ?string $name = null;

    #[Serializer\SerializedName('keywords')]
    #[Serializer\Exclude(if: 'object.getKeywords() === null')]
    private ?string $keywords = null;

    #[Serializer\SerializedName('description')]
    #[Serializer\Exclude(if: 'object.getDescription() === null')]
    private ?string $description = null;

    #[Serializer\SerializedName('metaTitle')]
    #[Serializer\Exclude(if: 'object.getMetaTitle() === null')]
    private ?string $metaTitle = null;

    #[Serializer\SerializedName('packUnit')]
    #[Serializer\Exclude(if: 'object.getPackUnit() === null')]
    private ?string $packUnit = null;

    #[Serializer\SerializedName('packUnitPlural')]
    #[Serializer\Exclude(if: 'object.getPackUnitPlural() === null')]
    private ?string $packUnitPlural = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('customSearchKeywords')]
    #[Serializer\Exclude(if: 'object.getCustomSearchKeywords() === null')]
    private ?array $customSearchKeywords = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('slotConfig')]
    #[Serializer\Exclude(if: 'object.getSlotConfig() === null')]
    private ?array $slotConfig = null;

    #[Serializer\SerializedName('languageId')]
    #[Serializer\Exclude(if: 'object.getLanguageId() === null')]
    private ?string $languageId = null;

    #[Serializer\SerializedName('productVersionId')]
    #[Serializer\Exclude(if: 'object.getProductVersionId() === null')]
    private ?string $productVersionId = null;

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(?string $metaDescription): self
    {
        $this->metaDescription = $metaDescription;

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

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(?string $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    public function setMetaTitle(?string $metaTitle): self
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    public function getPackUnit(): ?string
    {
        return $this->packUnit;
    }

    public function setPackUnit(?string $packUnit): self
    {
        $this->packUnit = $packUnit;

        return $this;
    }

    public function getPackUnitPlural(): ?string
    {
        return $this->packUnitPlural;
    }

    public function setPackUnitPlural(?string $packUnitPlural): self
    {
        $this->packUnitPlural = $packUnitPlural;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getCustomSearchKeywords(): ?array
    {
        return $this->customSearchKeywords;
    }

    /**
     * @param mixed[]|null $customSearchKeywords
     */
    public function setCustomSearchKeywords(?array $customSearchKeywords): self
    {
        $this->customSearchKeywords = $customSearchKeywords;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getSlotConfig(): ?array
    {
        return $this->slotConfig;
    }

    /**
     * @param mixed[]|null $slotConfig
     * @return $this
     */
    public function setSlotConfig(?array $slotConfig): self
    {
        $this->slotConfig = $slotConfig;

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

    public function getProductVersionId(): ?string
    {
        return $this->productVersionId;
    }

    public function setProductVersionId(?string $productVersionId): self
    {
        $this->productVersionId = $productVersionId;

        return $this;
    }
}
