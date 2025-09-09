<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class SummaryDescriptionDto
{
    #[Serializer\SerializedName('ShortSummaryDescription')]
    private ?string $shortSummaryDescription = null;

    #[Serializer\SerializedName('LongSummaryDescription')]
    private ?string $longSummaryDescription = null;

    public function getShortSummaryDescription(): ?string
    {
        return $this->shortSummaryDescription;
    }

    public function setShortSummaryDescription(?string $shortSummaryDescription): self
    {
        $this->shortSummaryDescription = $shortSummaryDescription;

        return $this;
    }

    public function getLongSummaryDescription(): ?string
    {
        return $this->longSummaryDescription;
    }

    public function setLongSummaryDescription(?string $longSummaryDescription): self
    {
        $this->longSummaryDescription = $longSummaryDescription;

        return $this;
    }
}
