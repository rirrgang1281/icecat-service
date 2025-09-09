<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use JMS\Serializer\Annotation as Serializer;

class DownloadDto
{
    #[Serializer\SerializedName('productId')]
    private ?string $productId = null;

    #[Serializer\SerializedName('productVersionId')]
    private ?string $productVersionId = null;

    #[Serializer\SerializedName('mediaId')]
    private ?string $mediaId = null;

    #[Serializer\SerializedName('position')]
    private ?int $position = null;

    #[Serializer\SerializedName('product')]
    private ?ProductDto $product = null;

    #[Serializer\SerializedName('media')]
    private ?MediaDto $media = null;

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

    public function getMediaId(): ?string
    {
        return $this->mediaId;
    }

    public function setMediaId(?string $mediaId): self
    {
        $this->mediaId = $mediaId;

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

    public function getProduct(): ?ProductDto
    {
        return $this->product;
    }

    public function setProduct(?ProductDto $product): self
    {
        $this->product = $product;

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
}
