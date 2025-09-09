<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use JMS\Serializer\Annotation as Serializer;

// Pseudo price; MSRP
class ListPriceDto
{
    #[Serializer\SerializedName('gross')]
    #[Serializer\Exclude(if: 'object.getGross() === null')]
    private ?float $gross = null;

    #[Serializer\SerializedName('net')]
    #[Serializer\Exclude(if: 'object.getNet() === null')]
    private ?float $net = null;

    #[Serializer\SerializedName('currencyId')]
    private string $currencyId;

    #[Serializer\SerializedName('linked')]
    private bool $linked = false;

    public function getGross(): ?float
    {
        return $this->gross;
    }

    public function setGross(?float $gross): self
    {
        $this->gross = $gross;

        return $this;
    }

    public function getNet(): ?float
    {
        return $this->net;
    }

    public function setNet(?float $net): self
    {
        $this->net = $net;

        return $this;
    }

    public function getCurrencyId(): string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(string $currencyId): self
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    public function isLinked(): bool
    {
        return $this->linked;
    }

    public function setLinked(bool $linked): self
    {
        $this->linked = $linked;

        return $this;
    }
}
