<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class ProductSeriesDto
{
    #[Serializer\SerializedName('SeriesID')]
    private ?string $seriesId = null;

    public function getSeriesId(): ?string
    {
        return $this->seriesId;
    }

    public function setSeriesId(?string $seriesId): self
    {
        $this->seriesId = $seriesId;

        return $this;
    }
}
