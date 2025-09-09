<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use JMS\Serializer\Annotation as Serializer;

class TaxRuleDto
{
    #[Serializer\SerializedName('taxRuleTypeId')]
    private ?string $taxRuleTypeId = null;

    #[Serializer\SerializedName('countryId')]
    private ?string $countryId = null;

    #[Serializer\SerializedName('taxRate')]
    private ?float $taxRate = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('data')]
    private ?array $data = null;

    #[Serializer\SerializedName('taxId')]
    private ?string $taxId = null;

    #[Serializer\SerializedName('type')]
    private ?TaxRuleTypeDto $type = null;

    #[Serializer\SerializedName('country')]
    private ?CountryDto $country = null;

    #[Serializer\SerializedName('tax')]
    private ?TaxDto $tax = null;

    public function getTaxRuleTypeId(): ?string
    {
        return $this->taxRuleTypeId;
    }

    public function setTaxRuleTypeId(?string $taxRuleTypeId): self
    {
        $this->taxRuleTypeId = $taxRuleTypeId;

        return $this;
    }

    public function getCountryId(): ?string
    {
        return $this->countryId;
    }

    public function setCountryId(?string $countryId): self
    {
        $this->countryId = $countryId;

        return $this;
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

    /**
     * @return mixed[]|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param mixed[]|null $data
     */
    public function setData(?array $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    public function setTaxId(?string $taxId): self
    {
        $this->taxId = $taxId;

        return $this;
    }

    public function getType(): ?TaxRuleTypeDto
    {
        return $this->type;
    }

    public function setType(?TaxRuleTypeDto $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getCountry(): ?CountryDto
    {
        return $this->country;
    }

    public function setCountry(?CountryDto $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getTax(): ?TaxDto
    {
        return $this->tax;
    }

    public function setTax(?TaxDto $tax): self
    {
        $this->tax = $tax;

        return $this;
    }
}
