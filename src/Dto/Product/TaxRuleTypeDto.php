<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use JMS\Serializer\Annotation as Serializer;

class TaxRuleTypeDto
{
    #[Serializer\SerializedName('technicalName')]
    private ?string $technicalName = null;

    #[Serializer\SerializedName('position')]
    private ?int $position = null;

    #[Serializer\SerializedName('typeName')]
    private ?string $typeName = null;

    /** @var Collection<int, TaxRuleDto> */
    #[Serializer\SerializedName('rules')]
    private Collection $rules;

    /** @var Collection<int, TaxRuleTypeTranslationDto> */
    #[Serializer\SerializedName('translations')]
    private Collection $translations;

    public function __construct()
    {
        $this->rules = new ArrayCollection();
        $this->translations = new ArrayCollection();
    }

    public function getTechnicalName(): ?string
    {
        return $this->technicalName;
    }

    public function setTechnicalName(?string $technicalName): self
    {
        $this->technicalName = $technicalName;

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

    public function getTypeName(): ?string
    {
        return $this->typeName;
    }

    public function setTypeName(?string $typeName): self
    {
        $this->typeName = $typeName;

        return $this;
    }

    /** @return Collection<int, TaxRuleDto> */
    public function getRules(): Collection
    {
        return $this->rules;
    }

    public function setRules(TaxRuleDto $rule): self
    {
        $this->rules->add($rule);

        return $this;
    }

    /** @return Collection<int, TaxRuleTypeTranslationDto> */
    public function getTranslations(): Collection
    {
        return $this->translations;
    }

    public function setTranslations(TaxRuleTypeTranslationDto $translation): self
    {
        $this->translations->add($translation);

        return $this;
    }
}
