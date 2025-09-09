<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use JMS\Serializer\Annotation as Serializer;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class CategoryDto
{
    #[Serializer\SerializedName('parentId')]
    private ?string $parentId = null;

    #[Serializer\SerializedName('parentVersionId')]
    private ?string $parentVersionId = null;

    #[Serializer\SerializedName('afterCategoryId')]
    private ?string $afterCategoryId = null;

    #[Serializer\SerializedName('afterCategoryVersionId')]
    private ?string $afterCategoryVersionId = null;

    #[Serializer\SerializedName('mediaId')]
    private ?string $mediaId = null;

    #[Serializer\SerializedName('displayNestedProducts')]
    private ?bool $displayNestedProducts = null;

    #[Serializer\SerializedName('autoIncrement')]
    private ?int $autoIncrement = null;

    #[Serializer\SerializedName('breadcrumb')]
    private ?array $breadcrumb = null;

    #[Serializer\SerializedName('level')]
    private ?int $level = null;

    #[Serializer\SerializedName('path')]
    private ?string $path = null;

    #[Serializer\SerializedName('childCount')]
    private ?int $childCount = null;

    #[Serializer\SerializedName('type')]
    private ?string $type = null;

    #[Serializer\SerializedName('productAssignmentType')]
    private ?string $productAssignmentType = null;

    #[Serializer\SerializedName('visible')]
    private ?bool $visible = null;

    #[Serializer\SerializedName('active')]
    private ?bool $active = null;

    #[Serializer\SerializedName('cmsPageIdSwitched')]
    private ?bool $cmsPageIdSwitched = null;

    #[Serializer\SerializedName('visibleChildCount')]
    private ?int $visibleChildCount = null;

    #[Serializer\SerializedName('name')]
    private ?string $name = null;

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

    #[Serializer\SerializedName('parent')]
    private ?CategoryDto $parent = null;

    /** @var Collection<int, CategoryDto> */
    #[Serializer\SerializedName('children')]
    private Collection $children;

    #[Serializer\SerializedName('media')]
    private ?MediaDto $media = null;

    /** @var Collection<int, CategoryTranslationDto> */
    #[Serializer\SerializedName('translations')]
    private Collection $translations;

    /** @var Collection<int, ProductDto> */
    #[Serializer\SerializedName('products')]
    private Collection $products;

    /** @var Collection<int, ProductDto> */
    #[Serializer\SerializedName('nestedProducts')]
    private Collection $nestedProducts;

    /** @var Collection<int, TagDto> */
    #[Serializer\SerializedName('tags')]
    private Collection $tags;

    #[Serializer\SerializedName('productStreamId')]
    private ?string $productStreamId = null;

    #[Serializer\SerializedName('productStream')]
    private ?StreamDto $productStream = null;

    #[Serializer\SerializedName('customEntityTypeId')]
    private ?string $customEntityTypeId = null;

    /** @var Collection<int, SalesChannelDto> */
    #[Serializer\SerializedName('navigationSalesChannels')]
    private Collection $navigationSalesChannels;

    /** @var Collection<int, SalesChannelDto> */
    #[Serializer\SerializedName('footerSalesChannels')]
    private Collection $footerSalesChannels;

    /** @var Collection<int, SalesChannelDto> */
    #[Serializer\SerializedName('serviceSalesChannels')]
    private Collection $serviceSalesChannels;

    /** @var Collection<int, MainCategoryDto> */
    #[Serializer\SerializedName('mainCategories')]
    private Collection $mainCategories;

    /** @var Collection<int, SeoUrlDto> */
    #[Serializer\SerializedName('seoUrls')]
    private Collection $seoUrls;

    public function __construct()
    {
        $this->children = new ArrayCollection();
        $this->translations = new ArrayCollection();
        $this->products = new ArrayCollection();
        $this->nestedProducts = new ArrayCollection();
        $this->tags = new ArrayCollection();
        $this->navigationSalesChannels = new ArrayCollection();
        $this->footerSalesChannels = new ArrayCollection();
        $this->serviceSalesChannels = new ArrayCollection();
        $this->mainCategories = new ArrayCollection();
        $this->seoUrls = new ArrayCollection();
    }

    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    public function setParentId(?string $parentId): self
    {
        $this->parentId = $parentId;

        return $this;
    }

    public function getParentVersionId(): ?string
    {
        return $this->parentVersionId;
    }

    public function setParentVersionId(?string $parentVersionId): self
    {
        $this->parentVersionId = $parentVersionId;

        return $this;
    }

    public function getAfterCategoryId(): ?string
    {
        return $this->afterCategoryId;
    }

    public function setAfterCategoryId(?string $afterCategoryId): self
    {
        $this->afterCategoryId = $afterCategoryId;

        return $this;
    }

    public function getAfterCategoryVersionId(): ?string
    {
        return $this->afterCategoryVersionId;
    }

    public function setAfterCategoryVersionId(?string $afterCategoryVersionId): self
    {
        $this->afterCategoryVersionId = $afterCategoryVersionId;

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

    public function getDisplayNestedProducts(): ?bool
    {
        return $this->displayNestedProducts;
    }

    public function setDisplayNestedProducts(?bool $displayNestedProducts): self
    {
        $this->displayNestedProducts = $displayNestedProducts;

        return $this;
    }

    public function getAutoIncrement(): ?int
    {
        return $this->autoIncrement;
    }

    public function setAutoIncrement(?int $autoIncrement): self
    {
        $this->autoIncrement = $autoIncrement;

        return $this;
    }

    public function getBreadcrumb(): ?array
    {
        return $this->breadcrumb;
    }

    public function setBreadcrumb(?array $breadcrumb): self
    {
        $this->breadcrumb = $breadcrumb;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(?int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getChildCount(): ?int
    {
        return $this->childCount;
    }

    public function setChildCount(?int $childCount): self
    {
        $this->childCount = $childCount;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getProductAssignmentType(): ?string
    {
        return $this->productAssignmentType;
    }

    public function setProductAssignmentType(?string $productAssignmentType): self
    {
        $this->productAssignmentType = $productAssignmentType;

        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(?bool $visible): self
    {
        $this->visible = $visible;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getCmsPageIdSwitched(): ?bool
    {
        return $this->cmsPageIdSwitched;
    }

    public function setCmsPageIdSwitched(?bool $cmsPageIdSwitched): self
    {
        $this->cmsPageIdSwitched = $cmsPageIdSwitched;

        return $this;
    }

    public function getVisibleChildCount(): ?int
    {
        return $this->visibleChildCount;
    }

    public function setVisibleChildCount(?int $visibleChildCount): self
    {
        $this->visibleChildCount = $visibleChildCount;

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

    public function getSlotConfig(): ?array
    {
        return $this->slotConfig;
    }

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

    public function getParent(): ?CategoryDto
    {
        return $this->parent;
    }

    public function setParent(?CategoryDto $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    /** @return Collection<int, CategoryDto> */
    public function getChildren(): Collection
    {
        return $this->children;
    }

    public function addChild(CategoryDto $child): self
    {
        $this->children->add($child);

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

    /** @return Collection<int, CategoryTranslationDto> */
    public function getTranslations(): Collection
    {
        return $this->translations;
    }

    public function addTranslation(CategoryTranslationDto $translation): self
    {
        $this->translations->add($translation);

        return $this;
    }

    /** @return Collection<int, ProductDto> */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(ProductDto $product): self
    {
        $this->products->add($product);

        return $this;
    }

    /** @return Collection<int, ProductDto> */
    public function getNestedProducts(): Collection
    {
        return $this->nestedProducts;
    }

    public function addNestedProduct(ProductDto $nestedProduct): self
    {
        $this->nestedProducts->add($nestedProduct);

        return $this;
    }

    /** @return Collection<int, TagDto> */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag(TagDto $tag): self
    {
        $this->tags->add($tag);

        return $this;
    }

    public function getProductStreamId(): ?string
    {
        return $this->productStreamId;
    }

    public function setProductStreamId(?string $productStreamId): self
    {
        $this->productStreamId = $productStreamId;

        return $this;
    }

    public function getProductStream(): ?StreamDto
    {
        return $this->productStream;
    }

    public function setProductStream(?StreamDto $productStream): self
    {
        $this->productStream = $productStream;

        return $this;
    }

    public function getCustomEntityTypeId(): ?string
    {
        return $this->customEntityTypeId;
    }

    public function setCustomEntityTypeId(?string $customEntityTypeId): self
    {
        $this->customEntityTypeId = $customEntityTypeId;

        return $this;
    }

    /** @return Collection<int, SalesChannelDto> */
    public function getNavigationSalesChannels(): Collection
    {
        return $this->navigationSalesChannels;
    }

    public function addNavigationSalesChannel(SalesChannelDto $navigationSalesChannel): self
    {
        $this->navigationSalesChannels->add($navigationSalesChannel);

        return $this;
    }

    /** @return Collection<int, SalesChannelDto> */
    public function getFooterSalesChannels(): Collection
    {
        return $this->footerSalesChannels;
    }

    public function addFooterSalesChannel(SalesChannelDto $footerSalesChannel): self
    {
        $this->footerSalesChannels->add($footerSalesChannel);

        return $this;
    }

    /** @return Collection<int, SalesChannelDto> */
    public function getServiceSalesChannels(): Collection
    {
        return $this->serviceSalesChannels;
    }

    public function addServiceSalesChannel(SalesChannelDto $serviceSalesChannel): self
    {
        $this->serviceSalesChannels->add($serviceSalesChannel);

        return $this;
    }

    /** @return Collection<int, MainCategoryDto> */
    public function getMainCategories(): Collection
    {
        return $this->mainCategories;
    }

    public function addMainCategory(MainCategoryDto $mainCategory): self
    {
        $this->mainCategories->add($mainCategory);

        return $this;
    }

    /** @return Collection<int, SeoUrlDto> */
    public function getSeoUrls(): Collection
    {
        return $this->seoUrls;
    }

    public function addSeoUrl(SeoUrlDto $seoUrl): self
    {
        $this->seoUrls->add($seoUrl);

        return $this;
    }
}
