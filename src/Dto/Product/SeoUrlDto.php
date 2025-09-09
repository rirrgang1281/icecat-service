<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use JMS\Serializer\Annotation as Serializer;

class SeoUrlDto
{
    #[Serializer\SerializedName('salesChannelId')]
    private ?string $salesChannelId = null;

    #[Serializer\SerializedName('languageId')]
    #[Serializer\Exclude(if: 'object.getLanguageId() === null')]
    private ?string $languageId = null;

    #[Serializer\SerializedName('foreignKey')]
    #[Serializer\Exclude(if: 'object.getForeignKey() === null')]
    private ?string $foreignKey = null;

    #[Serializer\SerializedName('routeName')]
    #[Serializer\Exclude(if: 'object.getRouteName() === null')]
    private ?string $routeName = null;

    #[Serializer\SerializedName('pathInfo')]
    #[Serializer\Exclude(if: 'object.getPathInfo() === null')]
    private ?string $pathInfo = null;

    #[Serializer\SerializedName('seoPathInfo')]
    #[Serializer\Exclude(if: 'object.getSeoPathInfo() === null')]
    private ?string $seoPathInfo = null;

    #[Serializer\SerializedName('isCanonical')]
    #[Serializer\Exclude(if: 'object.getIsCanonical() === null')]
    private ?bool $isCanonical = null;

    #[Serializer\SerializedName('isModified')]
    #[Serializer\Exclude(if: 'object.getIsModified() === null')]
    private ?bool $isModified = null;

    #[Serializer\SerializedName('isDeleted')]
    #[Serializer\Exclude(if: 'object.getIsDeleted() === null')]
    private ?bool $isDeleted = null;

    #[Serializer\SerializedName('url')]
    private ?string $url = null;

    #[Serializer\SerializedName('language')]
    #[Serializer\Exclude(if: 'object.getLanguage() === null')]
    private ?LanguageDto $language = null;

    #[Serializer\SerializedName('salesChannel')]
    #[Serializer\Exclude(if: 'object.getSalesChannel() === null')]
    private ?SalesChannelDto $salesChannel = null;

    #[Serializer\SerializedName('isValid')]
    #[Serializer\Exclude(if: 'object.getIsValid() === null')]
    private ?bool $isValid = null;

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

    public function getForeignKey(): ?string
    {
        return $this->foreignKey;
    }

    public function setForeignKey(?string $foreignKey): self
    {
        $this->foreignKey = $foreignKey;

        return $this;
    }

    public function getRouteName(): ?string
    {
        return $this->routeName;
    }

    public function setRouteName(?string $routeName): self
    {
        $this->routeName = $routeName;

        return $this;
    }

    public function getPathInfo(): ?string
    {
        return $this->pathInfo;
    }

    public function setPathInfo(?string $pathInfo): self
    {
        $this->pathInfo = $pathInfo;

        return $this;
    }

    public function getSeoPathInfo(): ?string
    {
        return $this->seoPathInfo;
    }

    public function setSeoPathInfo(?string $seoPathInfo): self
    {
        $this->seoPathInfo = $seoPathInfo;

        return $this;
    }

    public function getIsCanonical(): ?bool
    {
        return $this->isCanonical;
    }

    public function setIsCanonical(?bool $isCanonical): self
    {
        $this->isCanonical = $isCanonical;

        return $this;
    }

    public function getIsModified(): ?bool
    {
        return $this->isModified;
    }

    public function setIsModified(?bool $isModified): self
    {
        $this->isModified = $isModified;

        return $this;
    }

    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(?bool $isDeleted): self
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

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

    public function getSalesChannel(): ?SalesChannelDto
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?SalesChannelDto $salesChannel): self
    {
        $this->salesChannel = $salesChannel;

        return $this;
    }

    public function getIsValid(): ?bool
    {
        return $this->isValid;
    }

    public function setIsValid(?bool $isValid): self
    {
        $this->isValid = $isValid;

        return $this;
    }
}
