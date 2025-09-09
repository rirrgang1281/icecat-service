<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use JMS\Serializer\Annotation as Serializer;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class ProductDto
{
    #[Serializer\Exclude(if: 'object.getId() === null')]
    private ?string $id = null;

    #[Serializer\SerializedName('parentId')]
    #[Serializer\Exclude(if: 'object.getParentId() === null')]
    private ?string $parentId = null;

    #[Serializer\SerializedName('parentVersionId')]
    #[Serializer\Exclude(if: 'object.getParentVersionId() === null')]
    private ?string $parentVersionId = null;

    #[Serializer\SerializedName('manufacturerId')]
    #[Serializer\Exclude(if: 'object.getManufacturerId() === null')]
    private ?string $manufacturerId = null;

    #[Serializer\SerializedName('productManufacturerVersionId')]
    #[Serializer\Exclude(if: 'object.getProductManufacturerVersionId() === null')]
    private ?string $productManufacturerVersionId = null;

    #[Serializer\SerializedName('unitId')]
    #[Serializer\Exclude(if: 'object.getUnitId() === null')]
    private ?string $unitId = null;

    /** required */
    #[Serializer\SerializedName('taxId')]
    private ?string $taxId = null;

    #[Serializer\SerializedName('coverId')]
    #[Serializer\Exclude(if: 'object.getCoverId() === null')]
    private ?string $coverId = null;

    #[Serializer\SerializedName('productMediaVersionId')]
    #[Serializer\Exclude(if: 'object.getProductMediaVersionId() === null')]
    private ?string $productMediaVersionId = null;

    #[Serializer\SerializedName('deliveryTimeId')]
    #[Serializer\Exclude(if: 'object.getDeliveryTimeId() === null')]
    private ?string $deliveryTimeId = null;

    #[Serializer\SerializedName('featureSetId')]
    #[Serializer\Exclude(if: 'object.getFeatureSetId() === null')]
    private ?string $featureSetId = null;

    #[Serializer\SerializedName('canonicalProductId')]
    #[Serializer\Exclude(if: 'object.getCanonicalProductId() === null')]
    private ?string $canonicalProductId = null;

    #[Serializer\SerializedName('cmsPageId')]
    #[Serializer\Exclude(if: 'object.getCmsPageId() === null')]
    private ?string $cmsPageId = null;

    #[Serializer\SerializedName('cmsPageVersionId')]
    #[Serializer\Exclude(if: 'object.getCmsPageVersionId() === null')]
    private ?string $cmsPageVersionId = null;

    /** required */
    /** @var Collection<int, PriceDto> */
    #[Serializer\SerializedName('price')]
    private Collection $price;

    /** required */
    #[Serializer\SerializedName('productNumber')]
    private ?string $productNumber = null;

    /** required */
    #[Serializer\SerializedName('stock')]
    private ?int $stock = 0;

    #[Serializer\SerializedName('restockTime')]
    #[Serializer\Exclude(if: 'object.getRestockTime() === null')]
    private ?int $restockTime = null;

    #[Serializer\SerializedName('autoIncrement')]
    #[Serializer\Exclude(if: 'object.getAutoIncrement() === null')]
    private ?int $autoIncrement = null;

    #[Serializer\SerializedName('active')]
    private bool $active = false;

    #[Serializer\SerializedName('availableStock')]
    #[Serializer\Exclude(if: 'object.getAvailableStock() === null')]
    private ?int $availableStock = null;

    #[Serializer\SerializedName('available')]
    #[Serializer\Exclude(if: 'object.getAvailable() === null')]
    private ?bool $available = null;

    #[Serializer\SerializedName('isCloseout')]
    #[Serializer\Exclude(if: 'object.getIsCloseout() === null')]
    private ?bool $isCloseout = null;

    #[Serializer\SerializedName('variation')]
    #[Serializer\SkipWhenEmpty]
    #[Serializer\Exclude(if: 'object.getVariation() === null')]
    private ?array $variation = null;

    #[Serializer\SerializedName('displayGroup')]
    #[Serializer\Exclude(if: 'object.getDisplayGroup() === null')]
    private ?string $displayGroup = null;

    #[Serializer\SerializedName('variantListingConfig')]
    #[Serializer\SkipWhenEmpty]
    #[Serializer\Exclude(if: 'object.getVariantListingConfig() === null')]
    private ?array $variantListingConfig = null;

    #[Serializer\SerializedName('variantRestrictions')]
    #[Serializer\SkipWhenEmpty]
    #[Serializer\Exclude(if: 'object.getVariantRestrictions() === null')]
    private ?array $variantRestrictions = null;

    #[Serializer\SerializedName('manufacturerNumber')]
    #[Serializer\Exclude(if: 'object.getManufacturerNumber() === null')]
    private ?string $manufacturerNumber = null;

    #[Serializer\SerializedName('ean')]
    #[Serializer\Exclude(if: 'object.getEan() === null')]
    private ?string $ean = null;

    #[Serializer\SerializedName('purchaseSteps')]
    #[Serializer\Exclude(if: 'object.getPurchaseSteps() === null')]
    private ?int $purchaseSteps = null;

    #[Serializer\SerializedName('maxPurchase')]
    #[Serializer\Exclude(if: 'object.getMaxPurchase() === null')]
    private ?int $maxPurchase = null;

    #[Serializer\SerializedName('minPurchase')]
    #[Serializer\Exclude(if: 'object.getMinPurchase() === null')]
    private ?int $minPurchase = null;

    #[Serializer\SerializedName('purchaseUnit')]
    #[Serializer\Exclude(if: 'object.getPurchaseUnit() === null')]
    private ?float $purchaseUnit = null;

    #[Serializer\SerializedName('referenceUnit')]
    #[Serializer\Exclude(if: 'object.getReferenceUnit() === null')]
    private ?float $referenceUnit = null;

    #[Serializer\SerializedName('shippingFree')]
    #[Serializer\Exclude(if: 'object.getShippingFree() === null')]
    private ?bool $shippingFree = null;

    #[Serializer\SerializedName('purchasePrices')]
    #[Serializer\SkipWhenEmpty]
    #[Serializer\Exclude(if: 'object.getPurchasePrices() === null')]
    private ?array $purchasePrices = null;

    #[Serializer\SerializedName('markAsTopseller')]
    #[Serializer\Exclude(if: 'object.getMarkAsTopseller() === null')]
    private ?bool $markAsTopseller = false;

    #[Serializer\SerializedName('weight')]
    #[Serializer\Exclude(if: 'object.getWeight() === null')]
    private ?float $weight = null;

    #[Serializer\SerializedName('width')]
    #[Serializer\Exclude(if: 'object.getWidth() === null')]
    private ?float $width = null;

    #[Serializer\SerializedName('height')]
    #[Serializer\Exclude(if: 'object.getHeight() === null')]
    private ?float $height = null;

    #[Serializer\SerializedName('length')]
    #[Serializer\Exclude(if: 'object.getLength() === null')]
    private ?float $length = null;

    #[Serializer\SerializedName('releaseDate')]
    #[Serializer\Exclude(if: 'object.getReleaseDate() === null')]
    private ?DateTimeInterface $releaseDate = null;

    #[Serializer\SerializedName('ratingAverage')]
    #[Serializer\Exclude(if: 'object.getRatingAverage() === null')]
    private ?float $ratingAverage = null;

    #[Serializer\SerializedName('categoryTree')]
    #[Serializer\SkipWhenEmpty]
    #[Serializer\Exclude(if: 'object.getCategoryTree() === null')]
    private ?array $categoryTree = null;

    #[Serializer\SerializedName('propertyIds')]
    #[Serializer\SkipWhenEmpty]
    #[Serializer\Exclude(if: 'object.getPropertyIds() === null')]
    private ?array $propertyIds = null;

    /** @var Collection<int, string> */
    #[Serializer\SerializedName('optionIds')]
    #[Serializer\SkipWhenEmpty]
    private Collection $optionIds;

    #[Serializer\SerializedName('streamIds')]
    #[Serializer\SkipWhenEmpty]
    #[Serializer\Exclude(if: 'object.getStreamIds() === null')]
    private ?array $streamIds = null;

    #[Serializer\SerializedName('tagIds')]
    #[Serializer\SkipWhenEmpty]
    #[Serializer\Exclude(if: 'object.getTagIds() === null')]
    private ?array $tagIds = null;

    #[Serializer\SerializedName('categoryIds')]
    #[Serializer\SkipWhenEmpty]
    #[Serializer\Exclude(if: 'object.getCategoryIds() === null')]
    private ?array $categoryIds = null;

    #[Serializer\SerializedName('childCount')]
    #[Serializer\Exclude(if: '1 === 1')]
    private int $childCount = 0;

    #[Serializer\SerializedName('customFieldSetSelectionActive')]
    #[Serializer\Exclude(if: 'object.getCustomFieldSetSelectionActive() === null')]
    private ?bool $customFieldSetSelectionActive = null;

    #[Serializer\SerializedName('sales')]
    #[Serializer\Exclude(if: 'object.getSales() === null')]
    private ?int $sales = null;

    #[Serializer\SerializedName('states')]
    #[Serializer\SkipWhenEmpty]
    #[Serializer\Exclude(if: '1 === 1')]
    private ?array $states = ['is-physical'];

    /** @var Collection<int, DownloadDto> */
    #[Serializer\SerializedName('downloads')]
    #[Serializer\SkipWhenEmpty]
    private Collection $downloads;

    #[Serializer\SerializedName('metaDescription')]
    #[Serializer\Exclude(if: 'object.getMetaDescription() === null')]
    private ?string $metaDescription = null;

    #[Serializer\SerializedName('name')]
    #[Serializer\Exclude(if: 'object.getName() === null')]
    private ?string $name = null;

    #[Serializer\SerializedName('keywords')]
    #[Serializer\Exclude(if: 'object.getKeywords() === null')]
    private ?string $keywords = null;

    #[Serializer\SerializedName('description')]
    #[Serializer\Exclude(if: 'object.getDescription() === null')]
    private ?string $description = null;

    #[Serializer\SerializedName('metaTitle')]
    #[Serializer\Exclude(if: 'object.getMetaTitle() === null')]
    private ?string $metaTitle = null;

    #[Serializer\SerializedName('packUnit')]
    #[Serializer\Exclude(if: 'object.getPackUnit() === null')]
    private ?string $packUnit = null;

    #[Serializer\SerializedName('packUnitPlural')]
    #[Serializer\Exclude(if: 'object.getPackUnitPlural() === null')]
    private ?string $packUnitPlural = null;

    #[Serializer\SerializedName('slotConfig')]
    #[Serializer\SkipWhenEmpty]
    #[Serializer\Exclude(if: 'object.getSlotConfig() === null')]
    private ?array $slotConfig = null;

    #[Serializer\SerializedName('customSearchKeywords')]
    #[Serializer\SkipWhenEmpty]
    #[Serializer\Exclude(if: 'object.getCustomSearchKeywords() === null')]
    private ?array $customSearchKeywords = null;

    #[Serializer\SerializedName('parent')]
    #[Serializer\Exclude(if: 'object.getParent() === null')]
    private ?ProductDto $parent = null;

    /** @var Collection<int, ProductDto> */
    #[Serializer\SerializedName('children')]
    #[Serializer\SkipWhenEmpty]
    private Collection $children;

    #[Serializer\SerializedName('deliveryTime')]
    #[Serializer\Exclude(if: 'object.getDeliveryTime() === null')]
    private ?DeliveryTimeDto $deliveryTime = null;

    #[Serializer\SerializedName('tax')]
    #[Serializer\Exclude(if: 'object.getTax() === null')]
    private ?TaxDto $tax = null;

    #[Serializer\SerializedName('manufacturer')]
    #[Serializer\Exclude(if: 'object.getManufacturer() === null')]
    private ?ManufacturerDto $manufacturer = null;

    #[Serializer\SerializedName('unit')]
    #[Serializer\Exclude(if: 'object.getUnit() === null')]
    private ?UnitDto $unit = null;

    #[Serializer\SerializedName('cover')]
    #[Serializer\Exclude(if: 'object.getCover() === null')]
    private ?MediaDto $cover = null;

    #[Serializer\SerializedName('featureSet')]
    #[Serializer\Exclude(if: 'object.getFeatureSet() === null')]
    private ?FeatureSetDto $featureSet = null;

    #[Serializer\SerializedName('canonicalProduct')]
    #[Serializer\Exclude(if: 'object.getCanonicalProduct() === null')]
    private ?ProductDto $canonicalProduct = null;

    /** @var Collection<int, PricesDto> */
    #[Serializer\SerializedName('prices')]
    #[Serializer\SkipWhenEmpty]
    private Collection $prices;

    /** @var Collection<int, MediaDto> */
    #[Serializer\SerializedName('media')]
    #[Serializer\SkipWhenEmpty]
    private Collection $media;

    /** @var Collection<int, CrossSellingDto> */
    #[Serializer\SerializedName('crossSellings')]
    #[Serializer\SkipWhenEmpty]
    private Collection $crossSellings;

    /** @var Collection<int, CrossSellingAssignedProductDto> */
    #[Serializer\SerializedName('crossSellingAssignedProducts')]
    #[Serializer\SkipWhenEmpty]
    private Collection $crossSellingAssignedProducts;

    /** @var Collection<int, ConfiguratorSettingDto> */
    #[Serializer\SerializedName('configuratorSettings')]
    #[Serializer\SkipWhenEmpty]
    #[Serializer\Exclude(if: '1===1')]
    private Collection $configuratorSettings;

    /** @var Collection<int, VisibilityDto> */
    #[Serializer\SerializedName('visibilities')]
    #[Serializer\SkipWhenEmpty]
    private Collection $visibilities;

    /** @var Collection<int, SearchKeywordDto> */
    #[Serializer\SerializedName('searchKeywords')]
    #[Serializer\SkipWhenEmpty]
    private Collection $searchKeywords;

    // ** @var Collection<int, ReviewDto> */
    // #[Serializer\SerializedName('productReviews')]
    // private Collection $productReviews;

    /** @var Collection<int, MainCategoryDto> */
    #[Serializer\SerializedName('mainCategories')]
    #[Serializer\SkipWhenEmpty]
    private Collection $mainCategories;

    /** @var Collection<int, SeoUrlDto> */
    #[Serializer\SerializedName('seoUrls')]
    #[Serializer\SkipWhenEmpty]
    private Collection $seoUrls;

    /** @var Collection<int, PropertyGroupOptionDto> */
    #[Serializer\SerializedName('properties')]
    #[Serializer\SkipWhenEmpty]
    private Collection $properties;

    /** @var Collection<int, PropertyGroupOptionDto> */
    #[Serializer\SerializedName('options')]
    #[Serializer\SkipWhenEmpty]
    private Collection $options;

    /** @var Collection<int, CategoryDto> */
    #[Serializer\SerializedName('categories')]
    #[Serializer\SkipWhenEmpty]
    private Collection $categories;

    /** @var Collection<int, StreamDto> */
    #[Serializer\SerializedName('streams')]
    #[Serializer\SkipWhenEmpty]
    private Collection $streams;

    /** @var Collection<int, CategoryDto> */
    #[Serializer\SerializedName('categoriesRo')]
    #[Serializer\SkipWhenEmpty]
    private Collection $categoriesRo;

    /** @var Collection<int, TagDto> */
    #[Serializer\SerializedName('tags')]
    #[Serializer\SkipWhenEmpty]
    private Collection $tags;

    /** @var Collection<int, CustomFieldSetDto> */
    #[Serializer\SerializedName('customFieldSets')]
    #[Serializer\SkipWhenEmpty]
    private Collection $customFieldSets;

    #[Serializer\SerializedName('customFields')]
    private CustomFieldDto $customFields;

    /** @var Collection<string, TranslationDto> */
    #[Serializer\SerializedName('translations')]
    #[Serializer\SkipWhenEmpty]
    private Collection $translations;

    public function __construct()
    {
        $this->children = new ArrayCollection();
        $this->optionIds = new ArrayCollection();
        $this->downloads = new ArrayCollection();
        $this->prices = new ArrayCollection();
        $this->price = new ArrayCollection();
        $this->media = new ArrayCollection();
        $this->crossSellings = new ArrayCollection();
        $this->crossSellingAssignedProducts = new ArrayCollection();
        $this->configuratorSettings = new ArrayCollection();
        $this->visibilities = new ArrayCollection();
        $this->searchKeywords = new ArrayCollection();
        // $this->productReviews = new ArrayCollection();
        $this->mainCategories = new ArrayCollection();
        $this->seoUrls = new ArrayCollection();
        $this->properties = new ArrayCollection();
        $this->options = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->streams = new ArrayCollection();
        $this->categoriesRo = new ArrayCollection();
        $this->tags = new ArrayCollection();
        $this->customFieldSets = new ArrayCollection();
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

    public function getManufacturerId(): ?string
    {
        return $this->manufacturerId;
    }

    public function setManufacturerId(?string $manufacturerId): self
    {
        $this->manufacturerId = $manufacturerId;

        return $this;
    }

    public function getProductManufacturerVersionId(): ?string
    {
        return $this->productManufacturerVersionId;
    }

    public function setProductManufacturerVersionId(?string $productManufacturerVersionId): self
    {
        $this->productManufacturerVersionId = $productManufacturerVersionId;

        return $this;
    }

    public function getUnitId(): ?string
    {
        return $this->unitId;
    }

    public function setUnitId(?string $unitId): self
    {
        $this->unitId = $unitId;

        return $this;
    }

    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    public function setTaxId(?string $taxId): self
    {
        $this->taxId = $taxId;

        return $this;
    }

    public function getCoverId(): ?string
    {
        return $this->coverId;
    }

    public function setCoverId(?string $coverId): self
    {
        $this->coverId = $coverId;

        return $this;
    }

    public function getProductMediaVersionId(): ?string
    {
        return $this->productMediaVersionId;
    }

    public function setProductMediaVersionId(?string $productMediaVersionId): self
    {
        $this->productMediaVersionId = $productMediaVersionId;

        return $this;
    }

    public function getDeliveryTimeId(): ?string
    {
        return $this->deliveryTimeId;
    }

    public function setDeliveryTimeId(?string $deliveryTimeId): self
    {
        $this->deliveryTimeId = $deliveryTimeId;

        return $this;
    }

    public function getFeatureSetId(): ?string
    {
        return $this->featureSetId;
    }

    public function setFeatureSetId(?string $featureSetId): self
    {
        $this->featureSetId = $featureSetId;

        return $this;
    }

    public function getCanonicalProductId(): ?string
    {
        return $this->canonicalProductId;
    }

    public function setCanonicalProductId(?string $canonicalProductId): self
    {
        $this->canonicalProductId = $canonicalProductId;

        return $this;
    }

    public function getCmsPageId(): ?string
    {
        return $this->cmsPageId;
    }

    public function setCmsPageId(?string $cmsPageId): self
    {
        $this->cmsPageId = $cmsPageId;

        return $this;
    }

    public function getCmsPageVersionId(): ?string
    {
        return $this->cmsPageVersionId;
    }

    public function setCmsPageVersionId(?string $cmsPageVersionId): self
    {
        $this->cmsPageVersionId = $cmsPageVersionId;

        return $this;
    }

    /** @return Collection<int, PriceDto> */
    public function getPrice(): Collection
    {
        return $this->price;
    }

    public function addPrice(PriceDto $price): self
    {
        $this->price->add($price);

        return $this;
    }

    public function getProductNumber(): ?string
    {
        return $this->productNumber;
    }

    public function setProductNumber(?string $productNumber): self
    {
        $this->productNumber = $productNumber;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(?int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getRestockTime(): ?int
    {
        return $this->restockTime;
    }

    public function setRestockTime(?int $restockTime): self
    {
        $this->restockTime = $restockTime;

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

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getAvailableStock(): ?int
    {
        return $this->availableStock;
    }

    public function setAvailableStock(?int $availableStock): self
    {
        $this->availableStock = $availableStock;

        return $this;
    }

    public function getAvailable(): ?bool
    {
        return $this->available;
    }

    public function setAvailable(?bool $available): self
    {
        $this->available = $available;

        return $this;
    }

    public function getIsCloseout(): ?bool
    {
        return $this->isCloseout;
    }

    public function setIsCloseout(?bool $isCloseout): self
    {
        $this->isCloseout = $isCloseout;

        return $this;
    }

    public function getVariation(): ?array
    {
        return $this->variation;
    }

    public function setVariation(?array $variation): self
    {
        $this->variation = $variation;

        return $this;
    }

    public function getDisplayGroup(): ?string
    {
        return $this->displayGroup;
    }

    public function setDisplayGroup(?string $displayGroup): self
    {
        $this->displayGroup = $displayGroup;

        return $this;
    }

    public function getVariantListingConfig(): ?array
    {
        return $this->variantListingConfig;
    }

    public function setVariantListingConfig(?array $variantListingConfig): self
    {
        $this->variantListingConfig = $variantListingConfig;

        return $this;
    }

    public function getVariantRestrictions(): ?array
    {
        return $this->variantRestrictions;
    }

    public function setVariantRestrictions(?array $variantRestrictions): self
    {
        $this->variantRestrictions = $variantRestrictions;

        return $this;
    }

    public function getManufacturerNumber(): ?string
    {
        return $this->manufacturerNumber;
    }

    public function setManufacturerNumber(?string $manufacturerNumber): self
    {
        $this->manufacturerNumber = $manufacturerNumber;

        return $this;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(?string $ean): self
    {
        $this->ean = $ean;

        return $this;
    }

    public function getPurchaseSteps(): ?int
    {
        return $this->purchaseSteps;
    }

    public function setPurchaseSteps(?int $purchaseSteps): self
    {
        $this->purchaseSteps = $purchaseSteps;

        return $this;
    }

    public function getMaxPurchase(): ?int
    {
        return $this->maxPurchase;
    }

    public function setMaxPurchase(?int $maxPurchase): self
    {
        $this->maxPurchase = $maxPurchase;

        return $this;
    }

    public function getMinPurchase(): ?int
    {
        return $this->minPurchase;
    }

    public function setMinPurchase(?int $minPurchase): self
    {
        $this->minPurchase = $minPurchase;

        return $this;
    }

    public function getPurchaseUnit(): ?float
    {
        return $this->purchaseUnit;
    }

    public function setPurchaseUnit(?float $purchaseUnit): self
    {
        $this->purchaseUnit = $purchaseUnit;

        return $this;
    }

    public function getReferenceUnit(): ?float
    {
        return $this->referenceUnit;
    }

    public function setReferenceUnit(?float $referenceUnit): self
    {
        $this->referenceUnit = $referenceUnit;

        return $this;
    }

    public function getShippingFree(): ?bool
    {
        return $this->shippingFree;
    }

    public function setShippingFree(?bool $shippingFree): self
    {
        $this->shippingFree = $shippingFree;

        return $this;
    }

    public function getPurchasePrices(): ?array
    {
        return $this->purchasePrices;
    }

    public function setPurchasePrices(?array $purchasePrices): self
    {
        $this->purchasePrices = $purchasePrices;

        return $this;
    }

    public function getMarkAsTopseller(): ?bool
    {
        return $this->markAsTopseller;
    }

    public function setMarkAsTopseller(?bool $markAsTopseller): self
    {
        $this->markAsTopseller = $markAsTopseller;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(?float $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(?float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getLength(): ?float
    {
        return $this->length;
    }

    public function setLength(?float $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getReleaseDate(): ?DateTimeInterface
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(?DateTimeInterface $releaseDate): self
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getRatingAverage(): ?float
    {
        return $this->ratingAverage;
    }

    public function setRatingAverage(?float $ratingAverage): self
    {
        $this->ratingAverage = $ratingAverage;

        return $this;
    }

    public function getCategoryTree(): ?array
    {
        return $this->categoryTree;
    }

    public function setCategoryTree(?array $categoryTree): self
    {
        $this->categoryTree = $categoryTree;

        return $this;
    }

    public function getPropertyIds(): ?array
    {
        return $this->propertyIds;
    }

    public function setPropertyIds(?array $propertyIds): self
    {
        $this->propertyIds = $propertyIds;

        return $this;
    }

    /** @return Collection<int, string> */
    public function getOptionIds(): Collection
    {
        return $this->optionIds;
    }

    public function addOptionId(string $optionId): self
    {
        $this->optionIds->add($optionId);

        return $this;
    }

    public function getStreamIds(): ?array
    {
        return $this->streamIds;
    }

    public function setStreamIds(?array $streamIds): self
    {
        $this->streamIds = $streamIds;

        return $this;
    }

    public function getTagIds(): ?array
    {
        return $this->tagIds;
    }

    public function setTagIds(?array $tagIds): self
    {
        $this->tagIds = $tagIds;

        return $this;
    }

    public function getCategoryIds(): ?array
    {
        return $this->categoryIds;
    }

    public function setCategoryIds(?array $categoryIds): self
    {
        $this->categoryIds = $categoryIds;

        return $this;
    }

    public function getChildCount(): int
    {
        return $this->childCount;
    }

    public function setChildCount(int $childCount): self
    {
        $this->childCount = $childCount;

        return $this;
    }

    public function getCustomFieldSetSelectionActive(): ?bool
    {
        return $this->customFieldSetSelectionActive;
    }

    public function setCustomFieldSetSelectionActive(?bool $customFieldSetSelectionActive): self
    {
        $this->customFieldSetSelectionActive = $customFieldSetSelectionActive;

        return $this;
    }

    public function getSales(): ?int
    {
        return $this->sales;
    }

    public function setSales(?int $sales): self
    {
        $this->sales = $sales;

        return $this;
    }

    public function getStates(): ?array
    {
        return $this->states;
    }

    public function setStates(?array $states): self
    {
        $this->states = $states;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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

    public function getPackUnit(): ?string
    {
        return $this->packUnit;
    }

    public function setPackUnit(?string $packUnit): self
    {
        $this->packUnit = $packUnit;

        return $this;
    }

    public function getPackUnitPlural(): ?string
    {
        return $this->packUnitPlural;
    }

    public function setPackUnitPlural(?string $packUnitPlural): self
    {
        $this->packUnitPlural = $packUnitPlural;

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

    public function getCustomSearchKeywords(): ?array
    {
        return $this->customSearchKeywords;
    }

    public function setCustomSearchKeywords(?array $customSearchKeywords): self
    {
        $this->customSearchKeywords = $customSearchKeywords;

        return $this;
    }

    public function getParent(): ?ProductDto
    {
        return $this->parent;
    }

    public function setParent(?ProductDto $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    /** @return Collection<int, ProductDto> */
    public function getChildren(): Collection
    {
        return $this->children;
    }

    /** @param Collection<int, ProductDto> $children */
    public function setChildren(Collection $children): self
    {
        $this->children = $children;
        $this->childCount = count($children);

        return $this;
    }

    public function addChild(ProductDto $child): self
    {
        $this->children->add($child);
        $this->childCount = count($this->children);

        return $this;
    }

    /** @return Collection<int, DownloadDto> */
    public function getDownloads(): Collection
    {
        return $this->downloads;
    }

    public function addDownloads(DownloadDto $download): self
    {
        $this->downloads->add($download);

        return $this;
    }

    public function getDeliveryTime(): ?DeliveryTimeDto
    {
        return $this->deliveryTime;
    }

    public function setDeliveryTime(?DeliveryTimeDto $deliveryTime): self
    {
        $this->deliveryTime = $deliveryTime;

        return $this;
    }

    public function getTax(): ?TaxDto
    {
        return $this->tax;
    }

    public function setTax(?TaxDto $tax): self
    {
        $this->tax = $tax;

        return $this;
    }

    public function getManufacturer(): ?ManufacturerDto
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?ManufacturerDto $manufacturer): self
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    public function getUnit(): ?UnitDto
    {
        return $this->unit;
    }

    public function setUnit(?UnitDto $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    public function getCover(): ?MediaDto
    {
        return $this->cover;
    }

    public function setCover(?MediaDto $cover): self
    {
        $this->cover = $cover;

        return $this;
    }

    public function getFeatureSet(): ?FeatureSetDto
    {
        return $this->featureSet;
    }

    public function setFeatureSet(?FeatureSetDto $featureSet): self
    {
        $this->featureSet = $featureSet;

        return $this;
    }

    public function getCanonicalProduct(): ?ProductDto
    {
        return $this->canonicalProduct;
    }

    public function setCanonicalProduct(?ProductDto $canonicalProduct): self
    {
        $this->canonicalProduct = $canonicalProduct;

        return $this;
    }

    /** @return Collection<int, PricesDto> */
    public function getPrices(): Collection
    {
        return $this->prices;
    }

    public function addPrices(PricesDto $price): self
    {
        $this->prices->add($price);

        return $this;
    }

    /** @return Collection<int, MediaDto> */
    public function getMedia(): Collection
    {
        return $this->media;
    }

    public function addMedia(MediaDto $media): self
    {
        $this->media->add($media);

        return $this;
    }

    /** @return Collection<int, CrossSellingDto> */
    public function getCrossSellings(): Collection
    {
        return $this->crossSellings;
    }

    public function addCrossSelling(CrossSellingDto $crossSelling): self
    {
        $this->crossSellings->add($crossSelling);

        return $this;
    }

    /** @return Collection<int, CrossSellingAssignedProductDto> */
    public function getCrossSellingAssignedProducts(): Collection
    {
        return $this->crossSellingAssignedProducts;
    }

    public function addCrossSellingAssignedProducts(CrossSellingAssignedProductDto $crossSellingAssignedProduct): self
    {
        $this->crossSellingAssignedProducts->add($crossSellingAssignedProduct);

        return $this;
    }

    /** @return Collection<int, ConfiguratorSettingDto> */
    public function getConfiguratorSettings(): Collection
    {
        return $this->configuratorSettings;
    }

    public function addConfiguratorSetting(ConfiguratorSettingDto $configuratorSetting): self
    {
        $this->configuratorSettings->add($configuratorSetting);

        return $this;
    }

    /** @return Collection<int, VisibilityDto> */
    public function getVisibilities(): Collection
    {
        return $this->visibilities;
    }

    public function addVisibility(VisibilityDto $visibility): self
    {
        $this->visibilities->add($visibility);

        return $this;
    }

    /** @return Collection<int, SearchKeywordDto> */
    public function getSearchKeywords(): Collection
    {
        return $this->searchKeywords;
    }

    public function addSearchKeyword(SearchKeywordDto $searchKeyword): self
    {
        $this->searchKeywords->add($searchKeyword);

        return $this;
    }

    // ** @return Collection<int, ProductReview> */
    //    public function getProductReviews(): Collection
    //    {
    //        return $this->productReviews;
    //    }
    //
    //    public function addProductReviews(ReviewDto $productReview): self
    //    {
    //        $this->productReviews->add($productReview);
    //
    //        return $this;
    //    }

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

    /**  @return Collection<int, SeoUrlDto> */
    public function getSeoUrls(): Collection
    {
        return $this->seoUrls;
    }

    public function addSeoUrl(SeoUrlDto $seoUrl): self
    {
        $this->seoUrls->add($seoUrl);

        return $this;
    }

    /** @return Collection<int, PropertyGroupOptionDto> */
    public function getProperties(): Collection
    {
        return $this->properties;
    }

    public function addProperty(PropertyGroupOptionDto $property): self
    {
        $this->properties->add($property);

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

    /** @return Collection<int, CategoryDto> */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(CategoryDto $category): self
    {
        $this->categories->add($category);

        return $this;
    }

    /** @return Collection<int, StreamDto> */
    public function getStreams(): Collection
    {
        return $this->streams;
    }

    public function addStream(StreamDto $stream): self
    {
        $this->streams->add($stream);

        return $this;
    }

    /** @return Collection<int, CategoryDto> */
    public function getCategoriesRo(): Collection
    {
        return $this->categoriesRo;
    }

    public function addCategoryRo(CategoryDto $category): self
    {
        $this->categoriesRo->add($category);

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

    /** @return Collection<int, CustomFieldSetDto> */
    public function getCustomFieldSets(): Collection
    {
        return $this->customFieldSets;
    }

    public function addCustomFieldSet(CustomFieldSetDto $customFieldSet): self
    {
        $this->customFieldSets->add($customFieldSet);

        return $this;
    }

    /** @return Collection<string, TranslationDto> */
    public function getTranslations(): Collection
    {
        return $this->translations;
    }

    public function addTranslation(string $salesChannelId, TranslationDto $translation): self
    {
        $this->translations->set($salesChannelId, $translation);

        return $this;
    }

    public function getCustomFields(): CustomFieldDto
    {
        return $this->customFields;
    }

    public function setCustomFields(CustomFieldDto $customFields): self
    {
        $this->customFields = $customFields;

        return $this;
    }
}
