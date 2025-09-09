<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class ProductNameInfoDto
{
    #[Serializer\SerializedName('ProductIntName')]
    private ?string $value = null;

    #[Serializer\SerializedName('ProductLocalName')]
    #[Serializer\Type(ProductLocalNameDto::class . '::class')]
    private ?ProductLocalNameDto $productLocalName = null;

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    public function getProductLocalName(): ?ProductLocalNameDto
    {
        return $this->productLocalName;
    }

    public function setProductLocalName(?ProductLocalNameDto $productLocalName): void
    {
        $this->productLocalName = $productLocalName;
    }
}
