<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class GeneratedBulletPointsDto
{
    #[Serializer\SerializedName('Language')]
    private ?string $language = null;

    /** @var array<string>|null */
    #[Serializer\SerializedName('Values')]
    #[Serializer\Type('array')]
    private ?array $values = null;

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }

    /** @return array<string>|null $values */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /** @param array<string>|null $values */
    public function setValues(?array $values): self
    {
        $this->values = $values;

        return $this;
    }
}
