<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat;

use JMS\Serializer\Annotation as Serializer;
use Sdn\IcecatService\Dto\Icecat\Data\DataDto;

/**
 * @package:    Sdn\IcecatService\Dto
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class ProductDto
{
    #[Serializer\SerializedName('msg')]
    private ?string $msg = null;

    #[Serializer\SerializedName('data')]
    #[Serializer\Type(DataDto::class . '::class')]
    private ?DataDto $data = null;

    public function getMsg(): ?string
    {
        return $this->msg;
    }

    public function setMsg(?string $msg): self
    {
        $this->msg = $msg;

        return $this;
    }

    public function getData(): ?DataDto
    {
        return $this->data;
    }

    public function setData(?DataDto $data): self
    {
        $this->data = $data;

        return $this;
    }
}
