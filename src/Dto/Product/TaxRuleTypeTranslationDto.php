<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use JMS\Serializer\Annotation as Serializer;

class TaxRuleTypeTranslationDto
{
    #[Serializer\SerializedName('typeName')]
    private ?string $typeName = null;

    #[Serializer\SerializedName('taxRuleTypeId')]
    private ?string $taxRuleTypeId = null;

    #[Serializer\SerializedName('languageId')]
    private ?string $languageId = null;

    #[Serializer\SerializedName('taxRuleType')]
    private ?TaxRuleTypeDto $taxRuleType = null;

    #[Serializer\SerializedName('language')]
    private ?LanguageDto $language = null;

    public function getTypeName(): ?string
    {
        return $this->typeName;
    }

    public function setTypeName(?string $typeName): self
    {
        $this->typeName = $typeName;

        return $this;
    }

    public function getTaxRuleTypeId(): ?string
    {
        return $this->taxRuleTypeId;
    }

    public function setTaxRuleTypeId(?string $taxRuleTypeId): self
    {
        $this->taxRuleTypeId = $taxRuleTypeId;

        return $this;
    }

    public function getLanguageId(): ?string
    {
        return $this->languageId;
    }

    public function setLanguageId(?string $languageId): self
    {
        $this->languageId = $languageId;

        return $this;
    }

    public function getTaxRuleType(): ?TaxRuleTypeDto
    {
        return $this->taxRuleType;
    }

    public function setTaxRuleType(?TaxRuleTypeDto $taxRuleType): self
    {
        $this->taxRuleType = $taxRuleType;

        return $this;
    }

    public function getLanguage(): ?LanguageDto
    {
        return $this->language;
    }

    public function setLanguage(?LanguageDto $language): self
    {
        $this->language = $language;

        return $this;
    }
}
