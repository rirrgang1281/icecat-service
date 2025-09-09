<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use JMS\Serializer\Annotation as Serializer;

class DeliveryTimeDto
{
    #[Serializer\SerializedName('name')]
    private ?string $name = null;

    #[Serializer\SerializedName('min')]
    private ?int $min = null;

    #[Serializer\SerializedName('max')]
    private ?int $max = null;

    #[Serializer\SerializedName('unit')]
    private ?string $unit = null;

    /** @var Collection<int, ShippingMethodDto> */
    #[Serializer\SerializedName('shippingMethods')]
    private Collection $shippingMethods;

    /** @var Collection<int, ProductDto> */
    #[Serializer\SerializedName('products')]
    private Collection $products;

    /** @var Collection<int, DeliveryTimeTranslationDto> */
    #[Serializer\SerializedName('translations')]
    private Collection $translations;

    public function __construct()
    {
        $this->products = new ArrayCollection();
        $this->shippingMethods = new ArrayCollection();
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

    public function getMin(): ?int
    {
        return $this->min;
    }

    public function setMin(?int $min): self
    {
        $this->min = $min;

        return $this;
    }

    public function getMax(): ?int
    {
        return $this->max;
    }

    public function setMax(?int $max): self
    {
        $this->max = $max;

        return $this;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(?string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    /** @return Collection<int, ShippingMethodDto> */
    public function getShippingMethods(): Collection
    {
        return $this->shippingMethods;
    }

    public function setShippingMethods(ShippingMethodDto $shippingMethod): self
    {
        $this->shippingMethods->add($shippingMethod);

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

    /** @return Collection<int, DeliveryTimeTranslationDto> */
    public function getTranslations(): Collection
    {
        return $this->translations;
    }

    public function setTranslations(DeliveryTimeTranslationDto $translation): self
    {
        $this->translations->add($translation);

        return $this;
    }
}
