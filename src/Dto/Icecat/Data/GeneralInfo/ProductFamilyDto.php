<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class ProductFamilyDto
{
    #[Serializer\SerializedName('ProductFamilyID')]
    private ?string $productFamilyId = null;

    #[Serializer\SerializedName('Value')]
    private ?string $value = null;

    #[Serializer\SerializedName('Language')]
    private ?string $language = null;

    public function getProductFamilyId(): ?string
    {
        return $this->productFamilyId;
    }

    public function setProductFamilyId(?string $productFamilyId): self
    {
        $this->productFamilyId = $productFamilyId;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

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
