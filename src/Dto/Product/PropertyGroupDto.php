<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use JMS\Serializer\Annotation as Serializer;

class PropertyGroupDto
{
    #[Serializer\SerializedName('id')]
    #[Serializer\Exclude(if: 'object.getId() === null')]
    private ?string $id = null;

    #[Serializer\SerializedName('name')]
    #[Serializer\Exclude(if: 'object.getName() === null')]
    private ?string $name = null;

    #[Serializer\SerializedName('description')]
    #[Serializer\Exclude(if: 'object.getDescription() === null')]
    private ?string $description = null;

    #[Serializer\SerializedName('displayType')]
    #[Serializer\Exclude(if: 'object.getDisplayType() === null')]
    private ?string $displayType = null;

    #[Serializer\SerializedName('sortingType')]
    #[Serializer\Exclude(if: 'object.getSortingType() === null')]
    private ?string $sortingType = null;

    #[Serializer\SerializedName('filterable')]
    private bool $filterable = true;

    #[Serializer\SerializedName('visibleOnProductDetailPage')]
    private bool $visibleOnProductDetailPage = true;

    #[Serializer\SerializedName('position')]
    #[Serializer\Exclude(if: 'object.getPosition() === null')]
    private ?int $position = null;

    /** @var Collection<int, PropertyGroupOptionDto> */
    #[Serializer\SerializedName('options')]
    #[Serializer\SkipWhenEmpty]
    private Collection $options;

    /** @var Collection<int, PropertyGroupTranslationDto> */
    #[Serializer\SerializedName('translations')]
    #[Serializer\SkipWhenEmpty]
    private Collection $translations;

    public function __construct()
    {
        $this->options = new ArrayCollection();
        $this->translations = new ArrayCollection();
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

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

    public function getDisplayType(): ?string
    {
        return $this->displayType;
    }

    public function setDisplayType(?string $displayType): self
    {
        $this->displayType = $displayType;

        return $this;
    }

    public function getSortingType(): ?string
    {
        return $this->sortingType;
    }

    public function setSortingType(?string $sortingType): self
    {
        $this->sortingType = $sortingType;

        return $this;
    }

    public function getFilterable(): bool
    {
        return $this->filterable;
    }

    public function setFilterable(bool $filterable): self
    {
        $this->filterable = $filterable;

        return $this;
    }

    public function getVisibleOnProductDetailPage(): bool
    {
        return $this->visibleOnProductDetailPage;
    }

    public function setVisibleOnProductDetailPage(bool $visibleOnProductDetailPage): self
    {
        $this->visibleOnProductDetailPage = $visibleOnProductDetailPage;

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

    /** @return Collection<int, PropertyGroupOptionDto> */
    public function getOptions(): Collection
    {
        return $this->options;
    }

    public function addOption(PropertyGroupOptionDto $option): self
    {
        $this->options->add($option);

        return $this;
    }

    /** @return Collection<int, PropertyGroupTranslationDto> */
    public function getTranslations(): Collection
    {
        return $this->translations;
    }

    public function addTranslation(PropertyGroupTranslationDto $translation): self
    {
        $this->translations->add($translation);

        return $this;
    }
}
