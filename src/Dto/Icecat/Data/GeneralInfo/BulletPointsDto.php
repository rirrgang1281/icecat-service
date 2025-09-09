<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo;

use DateTimeInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class BulletPointsDto
{
    #[Serializer\SerializedName('BulletPointsId')]
    private ?string $bulletPointsId = null;

    #[Serializer\SerializedName('Language')]
    private ?string $language = null;

    /** @var array<string>|null */
    #[Serializer\SerializedName('Values')]
    #[Serializer\Type('array<string>')]
    private ?array $values = null;

    #[Serializer\SerializedName('Updated')]
    //    #[Serializer\Type("DateTimeInterface<'Y-m-d H:i:s'>")]
    private ?string $updated = null;

    public function getBulletPointsId(): ?string
    {
        return $this->bulletPointsId;
    }

    public function setBulletPointsId(?string $bulletPointsId): self
    {
        $this->bulletPointsId = $bulletPointsId;

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

    /**
     * @return string[]|null
     */
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

    public function getUpdated(): ?string
    {
        return $this->updated;
    }

    public function setUpdated(?string $updated): self
    {
        $this->updated = $updated;

        return $this;
    }
}
