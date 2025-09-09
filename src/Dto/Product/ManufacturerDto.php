<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use JMS\Serializer\Annotation as Serializer;

class ManufacturerDto
{
    #[Serializer\SerializedName('mediaId')]
    private ?string $mediaId = null;

    #[Serializer\SerializedName('link')]
    private ?string $link = null;

    #[Serializer\SerializedName('name')]
    private ?string $name = null;

    #[Serializer\SerializedName('description')]
    private ?string $description = null;

    #[Serializer\SerializedName('media')]
    private ?MediaDto $media = null;

    /** @var Collection<int, ProductDto> */
    #[Serializer\SerializedName('products')]
    private Collection $products;

    /** @var Collection<int, ManufacturerTranslationDto> */
    #[Serializer\SerializedName('translations')]
    private Collection $translations;

    public function __construct()
    {
        $this->products = new ArrayCollection();
        $this->translations = new ArrayCollection();
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

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

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

    public function getMedia(): ?MediaDto
    {
        return $this->media;
    }

    public function setMedia(?MediaDto $media): self
    {
        $this->media = $media;

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

    /** @return  Collection<int, ManufacturerTranslationDto> */
    public function getTranslations(): Collection
    {
        return $this->translations;
    }

    public function setTranslations(ManufacturerTranslationDto $translation): self
    {
        $this->translations->add($translation);

        return $this;
    }
}
