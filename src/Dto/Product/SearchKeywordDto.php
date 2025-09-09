<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use JMS\Serializer\Annotation as Serializer;

class SearchKeywordDto
{
    #[Serializer\SerializedName('languageId')]
    private ?string $languageId = null;

    #[Serializer\SerializedName('productId')]
    private ?string $productId = null;

    #[Serializer\SerializedName('productVersionId')]
    private ?string $productVersionId = null;

    #[Serializer\SerializedName('keyword')]
    private ?string $keyword = null;

    #[Serializer\SerializedName('ranking')]
    private ?float $ranking = null;

    #[Serializer\SerializedName('product')]
    private ?ProductDto $product = null;

    #[Serializer\SerializedName('language')]
    private ?LanguageDto $language = null;

    public function getLanguageId(): ?string
    {
        return $this->languageId;
    }

    public function setLanguageId(?string $languageId): self
    {
        $this->languageId = $languageId;

        return $this;
    }

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

    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    public function setKeyword(?string $keyword): self
    {
        $this->keyword = $keyword;

        return $this;
    }

    public function getRanking(): ?float
    {
        return $this->ranking;
    }

    public function setRanking(?float $ranking): self
    {
        $this->ranking = $ranking;

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
