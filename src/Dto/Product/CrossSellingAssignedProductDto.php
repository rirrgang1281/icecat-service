<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use JMS\Serializer\Annotation as Serializer;

class CrossSellingAssignedProductDto
{
    #[Serializer\SerializedName('crossSellingId')]
    #[Serializer\Exclude(if: 'object.getCrossSellingId() === null')]
    private ?string $crossSellingId = null;

    #[Serializer\SerializedName('productId')]
    #[Serializer\Exclude(if: 'object.getProductId() === null')]
    private ?string $productId = null;

    #[Serializer\SerializedName('productVersionId')]
    #[Serializer\Exclude(if: 'object.getProductVersionId() === null')]
    private ?string $productVersionId = null;

    #[Serializer\SerializedName('product')]
    #[Serializer\Exclude(if: 'object.getProduct() === null')]
    private ?ProductDto $product = null;

    #[Serializer\SerializedName('crossSelling')]
    #[Serializer\Exclude(if: 'object.getCrossSelling() === null')]
    private ?CrossSellingDto $crossSelling = null;

    #[Serializer\SerializedName('position')]
    #[Serializer\Exclude(if: 'object.getPosition() === null')]
    private ?int $position = null;

    public function getCrossSellingId(): ?string
    {
        return $this->crossSellingId;
    }

    public function setCrossSellingId(?string $crossSellingId): self
    {
        $this->crossSellingId = $crossSellingId;

        return $this;
    }

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

    public function getProduct(): ?ProductDto
    {
        return $this->product;
    }

    public function setProduct(?ProductDto $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getCrossSelling(): ?CrossSellingDto
    {
        return $this->crossSelling;
    }

    public function setCrossSelling(?CrossSellingDto $crossSelling): self
    {
        $this->crossSelling = $crossSelling;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;

        return $this;
    }
}
