<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use JMS\Serializer\Annotation as Serializer;

class VisibilityDto
{
    #[Serializer\SerializedName('productId')]
    private ?string $productId = null;

    #[Serializer\SerializedName('productVersionId')]
    private ?string $productVersionId = null;

    #[Serializer\SerializedName('salesChannelId')]
    private ?string $salesChannelId = null;

    #[Serializer\SerializedName('visibility')]
    private ?int $visibility = null;

    #[Serializer\SerializedName('salesChannel')]
    private ?SalesChannelDto $salesChannel = null;

    #[Serializer\SerializedName('product')]
    private ?ProductDto $product = null;

    public function getProductId(): ?string
    {
        return $this->productId;
    }

    public function setProductId(?string $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    public function getProductVersionId(): ?string
    {
        return $this->productVersionId;
    }

    public function setProductVersionId(?string $productVersionId): self
    {
        $this->productVersionId = $productVersionId;

        return $this;
    }

    public function getSalesChannelId(): ?string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(?string $salesChannelId): self
    {
        $this->salesChannelId = $salesChannelId;

        return $this;
    }

    public function getVisibility(): ?int
    {
        return $this->visibility;
    }

    public function setVisibility(?int $visibility): self
    {
        $this->visibility = $visibility;

        return $this;
    }

    public function getSalesChannel(): ?SalesChannelDto
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?SalesChannelDto $salesChannel): self
    {
        $this->salesChannel = $salesChannel;

        return $this;
    }

    public function getProduct(): ?ProductDto
    {
        return $this->product;
    }

    public function setProduct(?ProductDto $product): self
    {
        $this->product = $product;

        return $this;
    }
}
