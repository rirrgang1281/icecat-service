<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\SwProduct;

use DateTimeInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 */
class SwProduct
{
    private string $id;

    /** @var array<int, string> */
    #[Serializer\SerializedName('categoryTree')]
    #[Serializer\Type('array')]
    private array $categoryTree;

    /** @var array<int, string> */
    #[Serializer\SerializedName('categoryIds')]
    #[Serializer\Type('array')]
    private array $categoryIds;

    #[Serializer\SerializedName('parentId')]
    private ?string $parentId = null;

    #[Serializer\SerializedName('parentVersionId')]
    private ?string $parentVersionId = null;

    #[Serializer\SerializedName('manufacturerId')]
    private ?string $manufacturerId = null;

    #[Serializer\SerializedName('productManufacturerVersionId')]
    private ?string $productManufacturerVersionId = null;

    #[Serializer\SerializedName('unitId')]
    private ?string $unitId = null;

    #[Serializer\SerializedName('taxId')]
    private ?string $taxId = null;

    #[Serializer\SerializedName('coverId')]
    private ?string $coverId = null;

    #[Serializer\SerializedName('productMediaVersionId')]
    private ?string $productMediaVersionId = null;

    #[Serializer\SerializedName('deliveryTimeId')]
    private ?string $deliveryTimeId = null;

    #[Serializer\SerializedName('featureSetId')]
    private ?string $featureSetId = null;

    #[Serializer\SerializedName('canonicalProductId')]
    private ?string $canonicalProductId = null;

    #[Serializer\SerializedName('cmsPageId')]
    private ?string $cmsPageId = null;

    #[Serializer\SerializedName('cmsPageVersionId')]
    private ?string $cmsPageVersionId = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('price')]
    private ?array $price = null;

    #[Serializer\Type('string')]
    #[Serializer\SerializedName('productNumber')]
    private ?string $productNumber = null;

    #[Serializer\Type('integer')]
    private ?int $stock = null;

    #[Serializer\Type('integer')]
    #[Serializer\SerializedName('restockTime')]
    private ?int $restockTime = null;

    #[Serializer\Type('integer')]
    #[Serializer\SerializedName('autoIncrement')]
    private ?int $autoIncrement = null;

    #[Serializer\Type('boolean')]
    #[Serializer\SerializedName('active')]
    private bool $active = false;

    #[Serializer\Type('integer')]
    #[Serializer\SerializedName('availableStock')]
    private ?int $availableStock = null;

    #[Serializer\Type('boolean')]
    private ?bool $available = null;

    #[Serializer\SerializedName('isCloseout')]
    private ?bool $isCloseout = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('variation')]
    #[Serializer\Type('array')]
    private ?array $variation = null;

    #[Serializer\SerializedName('displayGroup')]
    private ?string $displayGroup = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('variantListingConfig')]
    #[Serializer\Type('array')]
    private ?array $variantListingConfig = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('variantRestrictions')]
    #[Serializer\Type('array')]
    private ?array $variantRestrictions = null;

    #[Serializer\SerializedName('manufacturerNumber')]
    private ?string $manufacturerNumber = null;

    #[Serializer\SerializedName('ean')]
    private ?string $ean = null;

    #[Serializer\SerializedName('purchaseSteps')]
    private ?int $purchaseSteps = null;

    #[Serializer\SerializedName('maxPurchase')]
    private ?int $maxPurchase = null;

    #[Serializer\SerializedName('minPurchase')]
    private ?int $minPurchase = null;

    #[Serializer\SerializedName('purchaseUnit')]
    private ?float $purchaseUnit = null;

    #[Serializer\SerializedName('referenceUnit')]
    private ?float $referenceUnit = null;

    #[Serializer\SerializedName('shippingFree')]
    private ?bool $shippingFree = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('purchasePrices')]
    #[Serializer\Type('array')]
    private ?array $purchasePrices = null;

    #[Serializer\SerializedName('markAsTopseller')]
    private ?bool $markAsTopseller = null;

    #[Serializer\Type('float')]
    private ?float $weight = null;

    #[Serializer\Type('float')]
    private ?float $width = null;

    #[Serializer\Type('float')]
    private ?float $height = null;

    #[Serializer\Type('float')]
    private ?float $length = null;

    #[Serializer\Type('DateTimeInterface')]
    #[Serializer\SerializedName('releaseDate')]
    private ?DateTimeInterface $releaseDate = null;

    #[Serializer\Type('float')]
    #[Serializer\SerializedName('ratingAverage')]
    private ?float $ratingAverage = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('propertyIds')]
    #[Serializer\Type('array')]
    private ?array $propertyIds = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('optionIds')]
    #[Serializer\Type('array')]
    private ?array $optionIds = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('streamIds')]
    #[Serializer\Type('array')]
    private ?array $streamIds = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('tagIds')]
    #[Serializer\Type('array')]
    private ?array $tagIds = null;

    #[Serializer\Type('integer')]
    #[Serializer\SerializedName('childCount')]
    private ?int $childCount = 0;

    #[Serializer\Type('boolean')]
    #[Serializer\SerializedName('customFieldSetSelectionActive')]
    private ?bool $customFieldSetSelectionActive = null;

    #[Serializer\Type('integer')]
    private ?int $sales = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\Type('array')]
    private ?array $states = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\Type('array')]
    private ?array $downloads = null;

    #[Serializer\SerializedName('metaDescription')]
    private ?string $metaDescription = null;

    private ?string $name = null;

    private ?string $keywords = null;

    private ?string $description = null;

    #[Serializer\SerializedName('metaTitle')]
    private ?string $metaTitle = null;

    #[Serializer\SerializedName('packUnit')]
    private ?string $packUnit = null;

    #[Serializer\SerializedName('packUnitPlural')]
    private ?string $packUnitPlural = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('slotConfig')]
    #[Serializer\Type('array')]
    private ?array $slotConfig = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('customSearchKeywords')]
    #[Serializer\Type('array')]
    private ?array $customSearchKeywords = null;

    private ?SwProduct $parent = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\Type('array')]
    private ?array $children = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('deliveryTime')]
    #[Serializer\Type('array')]
    private ?array $deliveryTime = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\Type('array')]
    private ?array $tax = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('manufacturer')]
    #[Serializer\Type('array')]
    private ?array $manufacturer = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\Type('array')]
    private ?array $unit = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\Type('array')]
    private ?array $cover = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('featureSet')]
    #[Serializer\Type('array')]
    private ?array $featureSet = null;

    /**
     * @var SwProduct|null
     */
    #[Serializer\SerializedName('canonicalProduct')]
    private ?SwProduct $canonicalProduct = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\Type('array')]
    private ?array $prices = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\Type('array')]
    private ?array $media = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('crossSellings')]
    #[Serializer\Type('array')]
    private ?array $crossSellings = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('crossSellingAssignedProducts')]
    #[Serializer\Type('array')]
    private ?array $crossSellingAssignedProducts = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('configuratorSettings')]
    #[Serializer\Type('array')]
    private ?array $configuratorSettings = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\Type('array')]
    private ?array $visibilities = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('searchKeywords')]
    #[Serializer\Type('array')]
    private ?array $searchKeywords = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('mainCategories')]
    #[Serializer\Type('array')]
    private ?array $mainCategories = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('seoUrls')]
    #[Serializer\Type('array')]
    private ?array $seoUrls = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\Type('array')]
    private ?array $properties = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\Type('array')]
    private ?array $options = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\Type('array')]
    private ?array $categories = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\Type('array')]
    private ?array $streams = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('categoriesRo')]
    #[Serializer\Type('array')]
    private ?array $categoriesRo = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\Type('array')]
    private ?array $tags = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\SerializedName('customFieldSets')]
    #[Serializer\Type('array')]
    private ?array $customFieldSets = null;

    /**
     * @var array<mixed>|null
     */
    #[Serializer\Type('array')]
    private ?array $translations = null;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /** @return array<int, string> */
    public function getCategoryTree(): array
    {
        return $this->categoryTree;
    }

    /** @param array<int, string> $categoryTree */
    public function setCategoryTree(array $categoryTree): self
    {
        $this->categoryTree = $categoryTree;

        return $this;
    }

    /** @return array<int, string> */
    public function getCategoryIds(): array
    {
        return $this->categoryIds;
    }

    /** @param array<int, string> $categoryIds */
    public function setCategoryIds(array $categoryIds): self
    {
        $this->categoryIds = $categoryIds;

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

    /**
     * @return mixed[]|null
     */
    public function getPrice(): ?array
    {
        return $this->price;
    }

    /**
     * @param mixed[]|null $price
     */
    public function setPrice(?array $price): self
    {
        $this->price = $price;

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

    public function isActive(): bool
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

    /**
     * @return mixed[]|null
     */
    public function getVariation(): ?array
    {
        return $this->variation;
    }

    /**
     * @param mixed[]|null $variation
     */
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

    /**
     * @return mixed[]|null
     */
    public function getVariantListingConfig(): ?array
    {
        return $this->variantListingConfig;
    }

    /**
     * @param mixed[]|null $variantListingConfig
     */
    public function setVariantListingConfig(?array $variantListingConfig): self
    {
        $this->variantListingConfig = $variantListingConfig;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getVariantRestrictions(): ?array
    {
        return $this->variantRestrictions;
    }

    /**
     * @param mixed[]|null $variantRestrictions
     */
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

    /**
     * @return mixed[]|null
     */
    public function getPurchasePrices(): ?array
    {
        return $this->purchasePrices;
    }

    /**
     * @param mixed[]|null $purchasePrices
     */
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

    /**
     * @return mixed[]|null
     */
    public function getPropertyIds(): ?array
    {
        return $this->propertyIds;
    }

    /**
     * @param mixed[]|null $propertyIds
     */
    public function setPropertyIds(?array $propertyIds): self
    {
        $this->propertyIds = $propertyIds;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getOptionIds(): ?array
    {
        return $this->optionIds;
    }

    /**
     * @param mixed[]|null $optionIds
     */
    public function setOptionIds(?array $optionIds): self
    {
        $this->optionIds = $optionIds;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getStreamIds(): ?array
    {
        return $this->streamIds;
    }

    /**
     * @param mixed[]|null $streamIds
     */
    public function setStreamIds(?array $streamIds): self
    {
        $this->streamIds = $streamIds;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getTagIds(): ?array
    {
        return $this->tagIds;
    }

    /**
     * @param mixed[]|null $tagIds
     */
    public function setTagIds(?array $tagIds): self
    {
        $this->tagIds = $tagIds;

        return $this;
    }

    public function getChildCount(): int
    {
        return $this->childCount === null ? 0 : $this->childCount;
    }

    public function setChildCount(?int $childCount): self
    {
        $this->childCount = $childCount === null ? 0 : $childCount;

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

    /**
     * @return mixed[]|null
     */
    public function getStates(): ?array
    {
        return $this->states;
    }

    /**
     * @param mixed[]|null $states
     */
    public function setStates(?array $states): self
    {
        $this->states = $states;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getDownloads(): ?array
    {
        return $this->downloads;
    }

    /**
     * @param mixed[]|null $downloads
     */
    public function setDownloads(?array $downloads): self
    {
        $this->downloads = $downloads;

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

    /**
     * @return mixed[]|null
     */
    public function getSlotConfig(): ?array
    {
        return $this->slotConfig;
    }

    /**
     * @param mixed[]|null $slotConfig
     */
    public function setSlotConfig(?array $slotConfig): self
    {
        $this->slotConfig = $slotConfig;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getCustomSearchKeywords(): ?array
    {
        return $this->customSearchKeywords;
    }

    /**
     * @param mixed[]|null $customSearchKeywords
     */
    public function setCustomSearchKeywords(?array $customSearchKeywords): self
    {
        $this->customSearchKeywords = $customSearchKeywords;

        return $this;
    }

    public function getParent(): ?SwProduct
    {
        return $this->parent;
    }

    public function setParent(?SwProduct $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getChildren(): ?array
    {
        return $this->children;
    }

    /**
     * @param mixed[]|null $children
     */
    public function setChildren(?array $children): self
    {
        $this->children = $children;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getDeliveryTime(): ?array
    {
        return $this->deliveryTime;
    }

    /**
     * @param mixed[]|null $deliveryTime
     */
    public function setDeliveryTime(?array $deliveryTime): self
    {
        $this->deliveryTime = $deliveryTime;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getTax(): ?array
    {
        return $this->tax;
    }

    /**
     * @param mixed[]|null $tax
     */
    public function setTax(?array $tax): self
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getManufacturer(): ?array
    {
        return $this->manufacturer;
    }

    /**
     * @param mixed[]|null $manufacturer
     */
    public function setManufacturer(?array $manufacturer): self
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getUnit(): ?array
    {
        return $this->unit;
    }

    /**
     * @param mixed[]|null $unit
     */
    public function setUnit(?array $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getCover(): ?array
    {
        return $this->cover;
    }

    /**
     * @param mixed[]|null $cover
     */
    public function setCover(?array $cover): self
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getFeatureSet(): ?array
    {
        return $this->featureSet;
    }

    /**
     * @param mixed[]|null $featureSet
     */
    public function setFeatureSet(?array $featureSet): self
    {
        $this->featureSet = $featureSet;

        return $this;
    }

    public function getCanonicalProduct(): ?SwProduct
    {
        return $this->canonicalProduct;
    }

    public function setCanonicalProduct(?SwProduct $canonicalProduct): self
    {
        $this->canonicalProduct = $canonicalProduct;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getPrices(): ?array
    {
        return $this->prices;
    }

    /**
     * @param mixed[]|null $prices
     */
    public function setPrices(?array $prices): self
    {
        $this->prices = $prices;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getMedia(): ?array
    {
        return $this->media;
    }

    /**
     * @param mixed[]|null $media
     */
    public function setMedia(?array $media): self
    {
        $this->media = $media;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getCrossSellings(): ?array
    {
        return $this->crossSellings;
    }

    /**
     * @param mixed[]|null $crossSellings
     */
    public function setCrossSellings(?array $crossSellings): self
    {
        $this->crossSellings = $crossSellings;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getCrossSellingAssignedProducts(): ?array
    {
        return $this->crossSellingAssignedProducts;
    }

    /**
     * @param mixed[]|null $crossSellingAssignedProducts
     */
    public function setCrossSellingAssignedProducts(?array $crossSellingAssignedProducts): self
    {
        $this->crossSellingAssignedProducts = $crossSellingAssignedProducts;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getConfiguratorSettings(): ?array
    {
        return $this->configuratorSettings;
    }

    /**
     * @param mixed[]|null $configuratorSettings
     */
    public function setConfiguratorSettings(?array $configuratorSettings): self
    {
        $this->configuratorSettings = $configuratorSettings;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getVisibilities(): ?array
    {
        return $this->visibilities;
    }

    /**
     * @param mixed[]|null $visibilities
     */
    public function setVisibilities(?array $visibilities): self
    {
        $this->visibilities = $visibilities;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getSearchKeywords(): ?array
    {
        return $this->searchKeywords;
    }

    /**
     * @param mixed[]|null $searchKeywords
     */
    public function setSearchKeywords(?array $searchKeywords): self
    {
        $this->searchKeywords = $searchKeywords;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getMainCategories(): ?array
    {
        return $this->mainCategories;
    }

    /**
     * @param mixed[]|null $mainCategories
     */
    public function setMainCategories(?array $mainCategories): self
    {
        $this->mainCategories = $mainCategories;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getSeoUrls(): ?array
    {
        return $this->seoUrls;
    }

    /**
     * @param mixed[]|null $seoUrls
     */
    public function setSeoUrls(?array $seoUrls): self
    {
        $this->seoUrls = $seoUrls;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getProperties(): ?array
    {
        return $this->properties;
    }

    /**
     * @param mixed[]|null $properties
     */
    public function setProperties(?array $properties): self
    {
        $this->properties = $properties;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    /**
     * @param mixed[]|null $options
     */
    public function setOptions(?array $options): self
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * @param mixed[]|null $categories
     */
    public function setCategories(?array $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getStreams(): ?array
    {
        return $this->streams;
    }

    /**
     * @param mixed[]|null $streams
     */
    public function setStreams(?array $streams): self
    {
        $this->streams = $streams;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getCategoriesRo(): ?array
    {
        return $this->categoriesRo;
    }

    /**
     * @param mixed[]|null $categoriesRo
     */
    public function setCategoriesRo(?array $categoriesRo): self
    {
        $this->categoriesRo = $categoriesRo;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param mixed[]|null $tags
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getCustomFieldSets(): ?array
    {
        return $this->customFieldSets;
    }

    /**
     * @param mixed[]|null $customFieldSets
     */
    public function setCustomFieldSets(?array $customFieldSets): self
    {
        $this->customFieldSets = $customFieldSets;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getTranslations(): ?array
    {
        return $this->translations;
    }

    /**
     * @param mixed[]|null $translations
     */
    public function setTranslations(?array $translations): self
    {
        $this->translations = $translations;

        return $this;
    }
}
