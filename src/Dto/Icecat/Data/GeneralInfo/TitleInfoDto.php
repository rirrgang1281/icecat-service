<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class TitleInfoDto
{
    #[Serializer\SerializedName('GeneratedIntTitle')]
    private ?string $generatedIntTitle = null;

    #[Serializer\SerializedName('GeneratedLocalTitle')]
    private ?GeneratedLocalTitleDto $generatedLocalTitle = null;

    #[Serializer\SerializedName('BrandLocalTitle')]
    private ?BrandLocalTitleDto $brandLocalTitle = null;

    public function getGeneratedIntTitle(): ?string
    {
        return $this->generatedIntTitle;
    }

    public function setGeneratedIntTitle(?string $generatedIntTitle): self
    {
        $this->generatedIntTitle = $generatedIntTitle;

        return $this;
    }

    public function getGeneratedLocalTitle(): ?GeneratedLocalTitleDto
    {
        return $this->generatedLocalTitle;
    }

    public function setGeneratedLocalTitle(?GeneratedLocalTitleDto $generatedLocalTitle): self
    {
        $this->generatedLocalTitle = $generatedLocalTitle;

        return $this;
    }

    public function getBrandLocalTitle(): ?BrandLocalTitleDto
    {
        return $this->brandLocalTitle;
    }

    public function setBrandLocalTitle(?BrandLocalTitleDto $brandLocalTitle): self
    {
        $this->brandLocalTitle = $brandLocalTitle;

        return $this;
    }
}
