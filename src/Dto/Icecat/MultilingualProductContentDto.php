<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat;

/**
 * @package:    Sdn\IcecatService\Icecat\Dto
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class MultilingualProductContentDto
{
    private ?GermanProductContentDto $germanProductContent = null;

    private ?EnglishProductContentDto $englishProductContent = null;

    public function getGermanProductContent(): ?GermanProductContentDto
    {
        return $this->germanProductContent;
    }

    public function setGermanProductContent(?GermanProductContentDto $germanProductContent): self
    {
        $this->germanProductContent = $germanProductContent;

        return $this;
    }

    public function getEnglishProductContent(): ?EnglishProductContentDto
    {
        return $this->englishProductContent;
    }

    public function setEnglishProductContent(?EnglishProductContentDto $englishProductContent): self
    {
        $this->englishProductContent = $englishProductContent;

        return $this;
    }
}
