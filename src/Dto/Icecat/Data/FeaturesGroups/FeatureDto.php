<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\FeaturesGroups;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\FeaturesGroups
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class FeatureDto
{
    #[Serializer\SerializedName('ID')]
    private ?string $id = null;

    #[Serializer\SerializedName('Sign')]
    private ?string $sign = null;

    #[Serializer\SerializedName('Measure')]
    #[Serializer\Type(MeasureDto::class . '::class')]
    private ?MeasureDto $measure = null;

    #[Serializer\SerializedName('Name')]
    #[Serializer\Type(FeatureNameDto::class . '::class')]
    private ?FeatureNameDto $featureName = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getSign(): ?string
    {
        return $this->sign;
    }

    public function setSign(?string $sign): self
    {
        $this->sign = $sign;

        return $this;
    }

    public function getMeasure(): ?MeasureDto
    {
        return $this->measure;
    }

    public function setMeasure(?MeasureDto $measure): self
    {
        $this->measure = $measure;

        return $this;
    }

    public function getFeatureName(): ?FeatureNameDto
    {
        return $this->featureName;
    }

    public function setFeatureName(?FeatureNameDto $featureName): self
    {
        $this->featureName = $featureName;

        return $this;
    }
}
