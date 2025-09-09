<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\FeaturesGroups;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\FeaturesGroups
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class FeatureGroupDto
{
    #[Serializer\SerializedName('ID')]
    private ?string $id = null;

    #[Serializer\SerializedName('Name')]
    #[Serializer\Type(FeatureGroupNameDto::class . '::class')]
    private ?FeatureGroupNameDto $name = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?FeatureGroupNameDto
    {
        return $this->name;
    }

    public function setName(?FeatureGroupNameDto $name): self
    {
        $this->name = $name;

        return $this;
    }
}
