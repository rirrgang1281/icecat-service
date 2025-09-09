<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use JMS\Serializer\Annotation as Serializer;

/**
 * @SuppressWarnings(PHPMD.TooManyFields)
 */
class CategoryTranslationDto
{
    #[Serializer\SerializedName('name')]
    private ?string $name = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('breadcrumb')]
    private ?array $breadcrumb = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('slotConfig')]
    private ?array $slotConfig = null;

    #[Serializer\SerializedName('linkType')]
    private ?string $linkType = null;

    #[Serializer\SerializedName('internalLink')]
    private ?string $internalLink = null;

    #[Serializer\SerializedName('externalLink')]
    private ?string $externalLink = null;

    #[Serializer\SerializedName('linkNewTab')]
    private ?bool $linkNewTab = null;

    #[Serializer\SerializedName('description')]
    private ?string $description = null;

    #[Serializer\SerializedName('metaTitle')]
    private ?string $metaTitle = null;

    #[Serializer\SerializedName('metaDescription')]
    private ?string $metaDescription = null;

    #[Serializer\SerializedName('keywords')]
    private ?string $keywords = null;

    #[Serializer\SerializedName('categoryId')]
    private ?string $categoryId = null;

    #[Serializer\SerializedName('languageId')]
    private ?string $languageId = null;

    #[Serializer\SerializedName('category')]
    private ?CategoryDto $category = null;

    #[Serializer\SerializedName('language')]
    private ?LanguageDto $language = null;

    #[Serializer\SerializedName('categoryVersionId')]
    private ?string $categoryVersionId = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getBreadcrumb(): ?array
    {
        return $this->breadcrumb;
    }

    /**
     * @param mixed[]|null $breadcrumb
     */
    public function setBreadcrumb(?array $breadcrumb): self
    {
        $this->breadcrumb = $breadcrumb;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getSlotConfig(): ?array
    {
        return $this->slotConfig;
    }

    /**
     * @param mixed[]|null $slotConfig
     * @return $this
     */
    public function setSlotConfig(?array $slotConfig): self
    {
        $this->slotConfig = $slotConfig;

        return $this;
    }

    public function getLinkType(): ?string
    {
        return $this->linkType;
    }

    public function setLinkType(?string $linkType): self
    {
        $this->linkType = $linkType;

        return $this;
    }

    public function getInternalLink(): ?string
    {
        return $this->internalLink;
    }

    public function setInternalLink(?string $internalLink): self
    {
        $this->internalLink = $internalLink;

        return $this;
    }

    public function getExternalLink(): ?string
    {
        return $this->externalLink;
    }

    public function setExternalLink(?string $externalLink): self
    {
        $this->externalLink = $externalLink;

        return $this;
    }

    public function getLinkNewTab(): ?bool
    {
        return $this->linkNewTab;
    }

    public function setLinkNewTab(?bool $linkNewTab): self
    {
        $this->linkNewTab = $linkNewTab;

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

    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    public function setMetaTitle(?string $metaTitle): self
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(?string $metaDescription): self
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(?string $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }

    public function setCategoryId(?string $categoryId): self
    {
        $this->categoryId = $categoryId;

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

    public function getCategory(): ?CategoryDto
    {
        return $this->category;
    }

    public function setCategory(?CategoryDto $category): self
    {
        $this->category = $category;

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

    public function getCategoryVersionId(): ?string
    {
        return $this->categoryVersionId;
    }

    public function setCategoryVersionId(?string $categoryVersionId): self
    {
        $this->categoryVersionId = $categoryVersionId;

        return $this;
    }
}
