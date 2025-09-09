<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use JMS\Serializer\Annotation as Serializer;

class UnitDto
{
    #[Serializer\SerializedName('shortCode')]
    private ?string $shortCode = null;

    #[Serializer\SerializedName('name')]
    private ?string $name = null;

    /** @var Collection<int, ProductDto> */
    #[Serializer\SerializedName('products')]
    private Collection $products;

    /** @var Collection<int, UnitTranslationDto> */
    #[Serializer\SerializedName('translations')]
    private Collection $translations;

    public function __construct()
    {
        $this->products = new ArrayCollection();
        $this->translations = new ArrayCollection();
    }

    public function getShortCode(): ?string
    {
        return $this->shortCode;
    }

    public function setShortCode(?string $shortCode): self
    {
        $this->shortCode = $shortCode;

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

    /** @return Collection<int, ProductDto> */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(ProductDto $product): self
    {
        $this->products->add($product);

        return $this;
    }

    /** @return Collection<int, UnitTranslationDto> */
    public function getTranslations(): Collection
    {
        return $this->translations;
    }

    public function addTranslation(UnitTranslationDto $translation): self
    {
        $this->translations->add($translation);

        return $this;
    }
}
