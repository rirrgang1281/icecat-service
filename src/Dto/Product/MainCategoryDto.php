<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use JMS\Serializer\Annotation as Serializer;

class MainCategoryDto
{
    #[Serializer\SerializedName('productId')]
    private ?string $productId = null;

    #[Serializer\SerializedName('productVersionId')]
    private ?string $productVersionId = null;

    #[Serializer\SerializedName('categoryId')]
    private ?string $categoryId = null;

    #[Serializer\SerializedName('categoryVersionId')]
    private ?string $categoryVersionId = null;

    #[Serializer\SerializedName('salesChannelId')]
    private ?string $salesChannelId = null;

    #[Serializer\SerializedName('product')]
    private ?ProductDto $product = null;

    #[Serializer\SerializedName('category')]
    private ?CategoryDto $category = null;

    #[Serializer\SerializedName('salesChannel')]
    private ?SalesChannelDto $salesChannel = null;

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

    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }

    public function setCategoryId(?string $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getCategoryVersionId(): ?string
    {
        return $this->categoryVersionId;
    }

    public function setCategoryVersionId(?string $categoryVersionId): self
    {
        $this->categoryVersionId = $categoryVersionId;

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

    public function getProduct(): ?ProductDto
    {
        return $this->product;
    }

    public function setProduct(?ProductDto $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getCategory(): ?CategoryDto
    {
        return $this->category;
    }

    public function setCategory(?CategoryDto $category): self
    {
        $this->category = $category;

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
}
