<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use JMS\Serializer\Annotation as Serializer;

class CrossSellingDto
{
    /** @var Collection<int, CrossSellingAssignedProductDto> */
    #[Serializer\SerializedName('assignedProducts')]
    #[Serializer\SkipWhenEmpty]
    public Collection $assignedProducts;

    /** @var Collection<int, CrossSellingTranslationDto> */
    #[Serializer\SerializedName('translations')]
    #[Serializer\SkipWhenEmpty]
    public Collection $translations;
    #[Serializer\SerializedName('name')]
    #[Serializer\Exclude(if: 'object.getName() === null')]
    private ?string $name = null;

    #[Serializer\SerializedName('position')]
    #[Serializer\Exclude(if: 'object.getPosition() === null')]
    private ?int $position = null;

    #[Serializer\SerializedName('sortBy')]
    #[Serializer\Exclude(if: 'object.getSortBy() === null')]
    private ?string $sortBy = null;

    #[Serializer\SerializedName('sortDirection')]
    #[Serializer\Exclude(if: 'object.getSortDirection() === null')]
    private ?string $sortDirection = null;

    #[Serializer\SerializedName('type')]
    #[Serializer\Exclude(if: 'object.getType() === null')]
    private ?string $type = null;

    #[Serializer\SerializedName('active')]
    #[Serializer\Exclude(if: 'object.getActive() === null')]
    private ?bool $active = null;

    #[Serializer\SerializedName('limit')]
    #[Serializer\Exclude(if: 'object.getLimit() === null')]
    private ?int $limit = null;

    #[Serializer\SerializedName('productId')]
    #[Serializer\Exclude(if: 'object.getProductId() === null')]
    private ?string $productId = null;

    #[Serializer\SerializedName('productVersionId')]
    #[Serializer\Exclude(if: 'object.getProductVersionId() === null')]
    private ?string $productVersionId = null;

    #[Serializer\SerializedName('product')]
    #[Serializer\Exclude(if: 'object.getProduct() === null')]
    private ?ProductDto $product = null;

    #[Serializer\SerializedName('productStreamId')]
    #[Serializer\Exclude(if: 'object.getProductStreamId() === null')]
    private ?string $productStreamId = null;

    #[Serializer\SerializedName('productStream')]
    #[Serializer\Exclude(if: 'object.getProductStream() === null')]
    private ?StreamDto $productStream = null;

    public function __construct()
    {
        $this->assignedProducts = new ArrayCollection();
        $this->translations = new ArrayCollection();
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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

    public function getSortBy(): ?string
    {
        return $this->sortBy;
    }

    public function setSortBy(?string $sortBy): self
    {
        $this->sortBy = $sortBy;

        return $this;
    }

    public function getSortDirection(): ?string
    {
        return $this->sortDirection;
    }

    public function setSortDirection(?string $sortDirection): self
    {
        $this->sortDirection = $sortDirection;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getLimit(): ?int
    {
        return $this->limit;
    }

    public function setLimit(?int $limit): self
    {
        $this->limit = $limit;

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

    public function getProductStreamId(): ?string
    {
        return $this->productStreamId;
    }

    public function setProductStreamId(?string $productStreamId): self
    {
        $this->productStreamId = $productStreamId;

        return $this;
    }

    public function getProductStream(): ?StreamDto
    {
        return $this->productStream;
    }

    public function setProductStream(?StreamDto $productStream): self
    {
        $this->productStream = $productStream;

        return $this;
    }

    /** @return Collection<int, CrossSellingAssignedProductDto> */
    public function getAssignedProducts(): Collection
    {
        return $this->assignedProducts;
    }

    public function addAssignedProducts(CrossSellingAssignedProductDto $assignedProduct): self
    {
        $this->assignedProducts->add($assignedProduct);

        return $this;
    }

    /** @return Collection<int, CrossSellingTranslationDto> */
    public function getTranslations(): Collection
    {
        return $this->translations;
    }

    public function addTranslations(CrossSellingTranslationDto $translation): self
    {
        $this->translations->add($translation);

        return $this;
    }
}
