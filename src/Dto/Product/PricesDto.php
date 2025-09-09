<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use JMS\Serializer\Annotation as Serializer;

class PricesDto
{
    #[Serializer\SerializedName('productId')]
    #[Serializer\Exclude(if: 'object.getProductId() === null')]
    public ?string $productId = null;

    #[Serializer\SerializedName('productVersionId')]
    #[Serializer\Exclude(if: 'object.getProductVersionId() === null')]
    public ?string $productVersionId = null;

    #[Serializer\SerializedName('ruleId')]
    #[Serializer\Exclude(if: 'object.getRuleId() === null')]
    public ?string $ruleId = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('price')]
    public ?array $price = null;

    #[Serializer\SerializedName('quantityStart')]
    #[Serializer\Exclude(if: 'object.getQuantityStart() === null')]
    public ?int $quantityStart = null;

    #[Serializer\SerializedName('quantityEnd')]
    #[Serializer\Exclude(if: 'object.getQuantityEnd() === null')]
    public ?int $quantityEnd = null;

    #[Serializer\SerializedName('product')]
    #[Serializer\Exclude(if: 'object.getProduct() === null')]
    public ?ProductDto $product = null;

    #[Serializer\SerializedName('rule')]
    #[Serializer\Exclude(if: 'object.getRule() === null')]
    public ?TaxRuleDto $rule = null;

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

    public function getRuleId(): ?string
    {
        return $this->ruleId;
    }

    public function setRuleId(?string $ruleId): self
    {
        $this->ruleId = $ruleId;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getPrice(): ?array
    {
        return $this->price;
    }

    /**
     * @param mixed[]|null $price
     */
    public function setPrice(?array $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getQuantityStart(): ?int
    {
        return $this->quantityStart;
    }

    public function setQuantityStart(?int $quantityStart): self
    {
        $this->quantityStart = $quantityStart;

        return $this;
    }

    public function getQuantityEnd(): ?int
    {
        return $this->quantityEnd;
    }

    public function setQuantityEnd(?int $quantityEnd): self
    {
        $this->quantityEnd = $quantityEnd;

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

    public function getRule(): ?TaxRuleDto
    {
        return $this->rule;
    }

    public function setRule(?TaxRuleDto $rule): self
    {
        $this->rule = $rule;

        return $this;
    }
}
