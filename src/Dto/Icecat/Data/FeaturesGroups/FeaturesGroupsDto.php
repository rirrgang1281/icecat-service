<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\FeaturesGroups;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\FeaturesGroups
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class FeaturesGroupsDto
{
    #[Serializer\SerializedName('ID')]
    private ?int $id = null;

    #[Serializer\SerializedName('SortNo')]
    private ?string $sortNo = null;

    #[Serializer\SerializedName('FeatureGroup')]
    #[Serializer\Type(FeatureGroupDto::class . '::class')]
    private ?FeatureGroupDto $featureGroup = null;

    /** @var FeaturesDetailDto[]|null */
    #[Serializer\SerializedName('Features')]
    #[Serializer\Type('array<Sdn\IcecatService\Dto\Icecat\Data\FeaturesGroups\FeaturesDetailDto>')]
    private ?array $features = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

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

    public function getFeatureGroup(): ?FeatureGroupDto
    {
        return $this->featureGroup;
    }

    public function setFeatureGroup(?FeatureGroupDto $featureGroup): self
    {
        $this->featureGroup = $featureGroup;

        return $this;
    }

    /**
     * @return FeaturesDetailDto[]|null
     */
    public function getFeatures(): ?array
    {
        return $this->features;
    }

    /**
     * @param FeaturesDetailDto[]|null $features
     */
    public function setFeaturesDetail(?array $features): self
    {
        $this->features = $features;

        return $this;
    }
}
