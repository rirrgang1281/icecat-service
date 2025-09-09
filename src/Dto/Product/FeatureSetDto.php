<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use JMS\Serializer\Annotation as Serializer;

class FeatureSetDto
{
    #[Serializer\SerializedName('name')]
    private ?string $name = null;

    #[Serializer\SerializedName('description')]
    private ?string $description = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('features')]
    private ?array $features = null;

    /** @var Collection<int, ProductDto> */
    #[Serializer\SerializedName('products')]
    private Collection $products;

    /** @var Collection<int, FeatureSetTranslationDto> */
    #[Serializer\SerializedName('translations')]
    private Collection $translations;

    public function __construct()
    {
        $this->products = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getFeatures(): ?array
    {
        return $this->features;
    }

    /**
     * @param mixed[]|null $features
     */
    public function setFeatures(?array $features): self
    {
        $this->features = $features;

        return $this;
    }

    /** @return Collection<int, ProductDto> */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function setProducts(ProductDto $product): self
    {
        $this->products->add($product);

        return $this;
    }

    /** @return Collection<int, FeatureSetTranslationDto> */
    public function getTranslations(): Collection
    {
        return $this->translations;
    }

    public function setTranslations(FeatureSetTranslationDto $translation): self
    {
        $this->translations->add($translation);

        return $this;
    }
}
