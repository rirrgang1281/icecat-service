<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use JMS\Serializer\Annotation as Serializer;

class TaxDto
{
    #[Serializer\SerializedName('taxRate')]
    private ?float $taxRate = null;

    #[Serializer\SerializedName('name')]
    private ?string $name = null;

    #[Serializer\SerializedName('position')]
    private ?int $position = null;

    /** @var Collection<int, ProductDto> */
    #[Serializer\SerializedName('products')]
    private Collection $products;

    /** @var Collection<int, TaxRuleDto> */
    #[Serializer\SerializedName('rules')]
    private Collection $rules;

    /** @var Collection<int, ShippingMethodDto> */
    #[Serializer\SerializedName('shippingMethods')]
    private Collection $shippingMethods;

    public function __construct()
    {
        $this->products = new ArrayCollection();
        $this->rules = new ArrayCollection();
        $this->shippingMethods = new ArrayCollection();
    }

    public function getTaxRate(): ?float
    {
        return $this->taxRate;
    }

    public function setTaxRate(?float $taxRate): self
    {
        $this->taxRate = $taxRate;

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

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;

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

    /** @return Collection<int, TaxRuleDto> */
    public function getRules(): Collection
    {
        return $this->rules;
    }

    public function addRules(TaxRuleDto $rule): self
    {
        $this->rules->add($rule);

        return $this;
    }

    /** @return Collection<int, ShippingMethodDto> */
    public function getShippingMethods(): Collection
    {
        return $this->shippingMethods;
    }

    public function addShippingMethods(ShippingMethodDto $shippingMethod): self
    {
        $this->shippingMethods->add($shippingMethod);

        return $this;
    }
}
