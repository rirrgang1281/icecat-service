<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use JMS\Serializer\Annotation as Serializer;

class PropertyGroupOptionDto
{
    #[Serializer\SerializedName('id')]
    #[Serializer\Exclude(if: 'object.getId() === null')]
    private ?string $id = null;

    #[Serializer\SerializedName('groupId')]
    #[Serializer\Exclude(if: 'object.getGroupId() === null')]
    private ?string $groupId = null;

    #[Serializer\SerializedName('name')]
    #[Serializer\Exclude(if: 'object.getName() === null')]
    private ?string $name = null;

    #[Serializer\SerializedName('position')]
    #[Serializer\Exclude(if: 'object.getPosition() === null')]
    private ?int $position = null;

    #[Serializer\SerializedName('colorHexCode')]
    #[Serializer\Exclude(if: 'object.getColorHexCode() === null')]
    private ?string $colorHexCode = null;

    #[Serializer\SerializedName('mediaId')]
    #[Serializer\Exclude(if: 'object.getMediaId() === null')]
    private ?string $mediaId = null;

    #[Serializer\SerializedName('media')]
    #[Serializer\Exclude(if: 'object.getMedia() === null')]
    private ?MediaDto $media = null;

    #[Serializer\SerializedName('group')]
    #[Serializer\Exclude(if: 'object.getGroup() === null')]
    private ?PropertyGroupDto $group = null;

    /** @var Collection<int, PropertyGroupOptionTranslationDto> */
    #[Serializer\SerializedName('translations')]
    #[Serializer\SkipWhenEmpty]
    private Collection $translations;

    /** @var Collection<int, ConfiguratorSettingDto> */
    #[Serializer\SerializedName('productConfiguratorSettings')]
    #[Serializer\SkipWhenEmpty]
    private Collection $productConfiguratorSettings;

    /** @var Collection<int, ProductDto> */
    #[Serializer\SerializedName('productProperties')]
    #[Serializer\SkipWhenEmpty]
    private Collection $productProperties;

    /** @var Collection<int, ProductDto> */
    #[Serializer\SerializedName('productOptions')]
    #[Serializer\SkipWhenEmpty]
    private Collection $productOptions;

    public function __construct()
    {
        $this->productConfiguratorSettings = new ArrayCollection();
        $this->productProperties = new ArrayCollection();
        $this->productOptions = new ArrayCollection();
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

    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    public function setGroupId(?string $groupId): self
    {
        $this->groupId = $groupId;

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

    public function getColorHexCode(): ?string
    {
        return $this->colorHexCode;
    }

    public function setColorHexCode(?string $colorHexCode): self
    {
        $this->colorHexCode = $colorHexCode;

        return $this;
    }

    public function getMediaId(): ?string
    {
        return $this->mediaId;
    }

    public function setMediaId(?string $mediaId): self
    {
        $this->mediaId = $mediaId;

        return $this;
    }

    public function getMedia(): ?MediaDto
    {
        return $this->media;
    }

    public function setMedia(?MediaDto $media): self
    {
        $this->media = $media;

        return $this;
    }

    public function getGroup(): ?PropertyGroupDto
    {
        return $this->group;
    }

    public function setGroup(?PropertyGroupDto $group): self
    {
        $this->group = $group;

        return $this;
    }

    /** @return Collection<int, PropertyGroupOptionTranslationDto> */
    public function getTranslations(): Collection
    {
        return $this->translations;
    }

    public function addTranslations(PropertyGroupOptionTranslationDto $translation): self
    {
        $this->translations->add($translation);

        return $this;
    }

    /** @return Collection<int, ConfiguratorSettingDto> */
    public function getProductConfiguratorSettings(): Collection
    {
        return $this->productConfiguratorSettings;
    }

    public function addProductConfiguratorSettings(ConfiguratorSettingDto $productConfiguratorSetting): self
    {
        $this->productConfiguratorSettings->add($productConfiguratorSetting);

        return $this;
    }

    /** @return  Collection<int, ProductDto> */
    public function getProductProperties(): Collection
    {
        return $this->productProperties;
    }

    public function addProductProperties(ProductDto $productProperty): self
    {
        $this->productProperties->add($productProperty);

        return $this;
    }

    /** @return Collection<int, ProductDto> */
    public function getProductOptions(): Collection
    {
        return $this->productOptions;
    }

    public function addProductOptions(ProductDto $productOption): self
    {
        $this->productOptions->add($productOption);

        return $this;
    }
}
