<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\FeaturesGroups;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\FeaturesGroups
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class MeasureDto
{
    #[Serializer\SerializedName('ID')]
    private ?string $id = null;

    #[Serializer\SerializedName('Sign')]
    private ?string $sign = null;

    #[Serializer\SerializedName('Signs')]
    #[Serializer\Type(SignsDto::class . '::class')]
    private ?SignsDto $signs = null;

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

    public function getSigns(): ?SignsDto
    {
        return $this->signs;
    }

    public function setSigns(?SignsDto $signs): self
    {
        $this->signs = $signs;

        return $this;
    }
}
