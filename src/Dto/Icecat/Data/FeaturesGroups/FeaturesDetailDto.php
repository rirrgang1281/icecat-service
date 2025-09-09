<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\FeaturesGroups;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\FeaturesGroups
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class FeaturesDetailDto
{
    #[Serializer\SerializedName('Localized')]
    private ?int $localized = null;

    #[Serializer\SerializedName('ID')]
    private ?int $id = null;

    #[Serializer\SerializedName('LocalID')]
    private ?int $localId = null;

    #[Serializer\SerializedName('Type')]
    private ?string $type = null;

    #[Serializer\SerializedName('Value')]
    private ?string $value = null;

    #[Serializer\SerializedName('CategoryFeatureId')]
    private ?string $categoryFeatureId = null;

    #[Serializer\SerializedName('CategoryFeatureGroupID')]
    private ?string $categoryFeatureGroupID = null;

    #[Serializer\SerializedName('SortNo')]
    private ?string $sortNo = null;

    #[Serializer\SerializedName('PresentationValue')]
    private ?string $presentationValue = null;

    #[Serializer\SerializedName('RawValue')]
    private ?string $rawValue = null;

    #[Serializer\SerializedName('LocalValue')]
    private ?string $localValue = null;

    #[Serializer\SerializedName('Description')]
    private ?string $description = null;

    #[Serializer\SerializedName('Mandatory')]
    private ?string $mandatory = null;

    #[Serializer\SerializedName('Searchable')]
    private ?string $searchable = null;

    #[Serializer\SerializedName('Optional')]
    private ?string $optional = null;

    #[Serializer\SerializedName('Feature')]
    #[Serializer\Type(FeatureDto::class . '::class')]
    private ?FeatureDto $feature = null;

    public function getLocalized(): ?int
    {
        return $this->localized;
    }

    public function setLocalized(?int $localized): self
    {
        $this->localized = $localized;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getLocalId(): ?int
    {
        return $this->localId;
    }

    public function setLocalId(?int $localId): self
    {
        $this->localId = $localId;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getCategoryFeatureId(): ?string
    {
        return $this->categoryFeatureId;
    }

    public function setCategoryFeatureId(?string $categoryFeatureId): self
    {
        $this->categoryFeatureId = $categoryFeatureId;

        return $this;
    }

    public function getCategoryFeatureGroupID(): ?string
    {
        return $this->categoryFeatureGroupID;
    }

    public function setCategoryFeatureGroupID(?string $categoryFeatureGroupID): self
    {
        $this->categoryFeatureGroupID = $categoryFeatureGroupID;

        return $this;
    }

    public function getSortNo(): ?string
    {
        return $this->sortNo;
    }

    public function setSortNo(?string $sortNo): self
    {
        $this->sortNo = $sortNo;

        return $this;
    }

    public function getPresentationValue(): ?string
    {
        return $this->presentationValue;
    }

    public function setPresentationValue(?string $presentationValue): self
    {
        $this->presentationValue = $presentationValue;

        return $this;
    }

    public function getRawValue(): ?string
    {
        return $this->rawValue;
    }

    public function setRawValue(?string $rawValue): self
    {
        $this->rawValue = $rawValue;

        return $this;
    }

    public function getLocalValue(): ?string
    {
        return $this->localValue;
    }

    public function setLocalValue(?string $localValue): self
    {
        $this->localValue = $localValue;

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

    public function getMandatory(): ?string
    {
        return $this->mandatory;
    }

    public function setMandatory(?string $mandatory): self
    {
        $this->mandatory = $mandatory;

        return $this;
    }

    public function getSearchable(): ?string
    {
        return $this->searchable;
    }

    public function setSearchable(?string $searchable): self
    {
        $this->searchable = $searchable;

        return $this;
    }

    public function getOptional(): ?string
    {
        return $this->optional;
    }

    public function setOptional(?string $optional): self
    {
        $this->optional = $optional;

        return $this;
    }

    public function getFeature(): ?FeatureDto
    {
        return $this->feature;
    }

    public function setFeature(?FeatureDto $feature): self
    {
        $this->feature = $feature;

        return $this;
    }
}
