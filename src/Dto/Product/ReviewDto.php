<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use JMS\Serializer\Annotation as Serializer;

class ReviewDto
{
    #[Serializer\SerializedName('productId')]
    private ?string $productId = null;

    #[Serializer\SerializedName('productVersionId')]
    private ?string $productVersionId = null;

    #[Serializer\SerializedName('customerId')]
    private ?string $customerId = null;

    #[Serializer\SerializedName('salesChannelId')]
    private ?string $salesChannelId = null;

    #[Serializer\SerializedName('languageId')]
    private ?string $languageId = null;

    #[Serializer\SerializedName('externalUser')]
    private ?string $externalUser = null;

    #[Serializer\SerializedName('externalEmail')]
    private ?string $externalEmail = null;

    #[Serializer\SerializedName('title')]
    private ?string $title = null;

    #[Serializer\SerializedName('content')]
    private ?string $content = null;

    #[Serializer\SerializedName('points')]
    private ?float $points = null;

    #[Serializer\SerializedName('status')]
    private ?bool $status = null;

    #[Serializer\SerializedName('comment')]
    private ?string $comment = null;

    #[Serializer\SerializedName('product')]
    private ?ProductDto $product = null;

    // #[Serializer\SerializedName('$customer')]
    // private ?CustomerDto $customer = null;

    #[Serializer\SerializedName('salesChannel')]
    private ?SalesChannelDto $salesChannel = null;

    #[Serializer\SerializedName('language')]
    private ?LanguageDto $language = null;

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

    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(?string $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }

    public function getSalesChannelId(): ?string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(?string $salesChannelId): self
    {
        $this->salesChannelId = $salesChannelId;

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

    public function getExternalUser(): ?string
    {
        return $this->externalUser;
    }

    public function setExternalUser(?string $externalUser): self
    {
        $this->externalUser = $externalUser;

        return $this;
    }

    public function getExternalEmail(): ?string
    {
        return $this->externalEmail;
    }

    public function setExternalEmail(?string $externalEmail): self
    {
        $this->externalEmail = $externalEmail;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getPoints(): ?float
    {
        return $this->points;
    }

    public function setPoints(?float $points): self
    {
        $this->points = $points;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

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

    public function getSalesChannel(): ?SalesChannelDto
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?SalesChannelDto $salesChannel): self
    {
        $this->salesChannel = $salesChannel;

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
