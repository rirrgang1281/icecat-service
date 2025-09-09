<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\FeaturesGroups;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\FeaturesGroups
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class SignsDto
{
    #[Serializer\SerializedName('ID')]
    private ?string $id = null;

    #[Serializer\SerializedName('Language')]
    private ?string $language = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }
}
