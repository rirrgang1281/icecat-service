<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\Gallery;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\Gallery
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class GalleryDetailAttributesDto
{
    #[Serializer\SerializedName('OriginalFileName')]
    private ?string $originalFileName = null;

    public function getOriginalFileName(): ?string
    {
        return $this->originalFileName;
    }

    public function setOriginalFileName(?string $originalFileName): self
    {
        $this->originalFileName = $originalFileName;

        return $this;
    }
}
