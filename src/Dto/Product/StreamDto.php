<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use JMS\Serializer\Annotation as Serializer;

class StreamDto
{
    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('apiFilter')]
    private ?array $apiFilter = null;

    #[Serializer\SerializedName('invalid')]
    private ?bool $invalid = null;

    #[Serializer\SerializedName('name')]
    private ?string $name = null;

    #[Serializer\SerializedName('description')]
    private ?string $description = null;

    /** @var Collection<int, StreamTranslationDto> */
    #[Serializer\SerializedName('translations')]
    private Collection $translations;

    /** @var Collection<int, StreamFilterDto> */
    #[Serializer\SerializedName('filters')]
    private Collection $filters;

    /** @var Collection<int, CrossSellingDto> */
    #[Serializer\SerializedName('productCrossSellings')]
    private Collection $productCrossSellings;

    /** @var Collection<int, ProductExportDto> */
    #[Serializer\SerializedName('productExports')]
    private Collection $productExports;

    /** @var Collection<int, CategoryDto> */
    #[Serializer\SerializedName('categories')]
    private Collection $categories;

    public function __construct()
    {
        $this->filters = new ArrayCollection();
        $this->translations = new ArrayCollection();
        $this->productCrossSellings = new ArrayCollection();
        $this->productExports = new ArrayCollection();
        $this->categories = new ArrayCollection();
    }

    /**
     * @return mixed[]|null
     */
    public function getApiFilter(): ?array
    {
        return $this->apiFilter;
    }

    /**
     * @param mixed[]|null $apiFilter
     */
    public function setApiFilter(?array $apiFilter): self
    {
        $this->apiFilter = $apiFilter;

        return $this;
    }

    public function getInvalid(): ?bool
    {
        return $this->invalid;
    }

    public function setInvalid(?bool $invalid): self
    {
        $this->invalid = $invalid;

        return $this;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /** @return Collection<int, StreamTranslationDto> */
    public function getTranslations(): Collection
    {
        return $this->translations;
    }

    public function addTranslation(StreamTranslationDto $translation): self
    {
        $this->translations->add($translation);

        return $this;
    }

    /** @return Collection<int, StreamFilterDto> */
    public function getFilters(): Collection
    {
        return $this->filters;
    }

    public function addFilter(StreamFilterDto $filter): self
    {
        $this->filters->add($filter);

        return $this;
    }

    /** @return Collection<int, CrossSellingDto> */
    public function getProductCrossSellings(): Collection
    {
        return $this->productCrossSellings;
    }

    public function addProductCrossSelling(CrossSellingDto $productCrossSelling): self
    {
        $this->productCrossSellings->add($productCrossSelling);

        return $this;
    }

    /** @return Collection<int, ProductExportDto> */
    public function getProductExports(): Collection
    {
        return $this->productExports;
    }

    public function addProductExport(ProductExportDto $productExport): self
    {
        $this->productExports->add($productExport);

        return $this;
    }

    /** @return Collection<int, CategoryDto> */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(CategoryDto $category): self
    {
        $this->categories->add($category);

        return $this;
    }
}
