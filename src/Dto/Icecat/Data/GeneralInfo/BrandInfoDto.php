<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class BrandInfoDto
{
    #[Serializer\SerializedName('BrandName')]
    private ?string $brandName = null;

    #[Serializer\SerializedName('BrandLocalName')]
    private ?string $brandLocalName = null;

    #[Serializer\SerializedName('BrandLogo')]
    private ?string $brandLogo = null;

    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    public function setBrandName(?string $brandName): void
    {
        $this->brandName = $brandName;
    }

    public function getBrandLocalName(): ?string
    {
        return $this->brandLocalName;
    }

    public function setBrandLocalName(?string $brandLocalName): void
    {
        $this->brandLocalName = $brandLocalName;
    }

    public function getBrandLogo(): ?string
    {
        return $this->brandLogo;
    }

    public function setBrandLogo(?string $brandLogo): void
    {
        $this->brandLogo = $brandLogo;
    }
}
