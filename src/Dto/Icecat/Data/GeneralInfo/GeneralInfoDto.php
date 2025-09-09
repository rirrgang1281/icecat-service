<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class GeneralInfoDto
{
    #[Serializer\SerializedName('IcecatId')]
    private ?int $icecatId = null;

    #[Serializer\SerializedName('ReleaseDate')]
    private ?string $releaseDate = null;

    #[Serializer\SerializedName('EndOfLifeDate')]
    private ?string $endOfLifeDate = null;

    #[Serializer\SerializedName('Title')]
    private ?string $title = null;

    #[Serializer\SerializedName('TitleInfo')]
    #[Serializer\Type(TitleInfoDto::class . '::class')]
    private ?TitleInfoDto $titleInfo = null;

    #[Serializer\SerializedName('Brand')]
    private ?string $brand = null;

    #[Serializer\SerializedName('BrandID')]
    private ?string $brandId = null;

    #[Serializer\SerializedName('BrandLogo')]
    private ?string $brandLogo = null;

    #[Serializer\SerializedName('BrandInfo')]
    #[Serializer\Type(BrandInfoDto::class . '::class')]
    private ?BrandInfoDto $brandInfo = null;

    #[Serializer\SerializedName('ProductName')]
    private ?string $productName = null;

    #[Serializer\SerializedName('ProductNameInfo')]
    #[Serializer\Type(ProductNameInfoDto::class . '::class')]
    private ?ProductNameInfoDto $productNameInfo = null;

    #[Serializer\SerializedName('BrandPartCode')]
    private ?string $brandPartCode = null;

    /** @var array<string>|null */
    #[Serializer\SerializedName('GTIN')]
    #[Serializer\Type('array<string>')]
    private ?array $gTIN = null;

    #[Serializer\SerializedName('Category')]
    #[Serializer\Type(CategoryDto::class . '::class')]
    private ?CategoryDto $category = null;

    #[Serializer\SerializedName('ProductFamily')]
    #[Serializer\Type(ProductFamilyDto::class . '::class')]
    private ?ProductFamilyDto $productFamily = null;

    #[Serializer\SerializedName('ProductSeries')]
    #[Serializer\Type(ProductSeriesDto::class . '::class')]
    private ?ProductSeriesDto $productSeries = null;

    #[Serializer\SerializedName('Description')]
    #[Serializer\Type(DescriptionDto::class . '::class')]
    private ?DescriptionDto $description = null;

    #[Serializer\SerializedName('SummaryDescription')]
    #[Serializer\Type(SummaryDescriptionDto::class . '::class')]
    private ?SummaryDescriptionDto $summaryDescription = null;

    #[Serializer\SerializedName('BulletPoints')]
    #[Serializer\Type(BulletPointsDto::class . '::class')]
    private ?BulletPointsDto $bulletPoints = null;

    #[Serializer\SerializedName('GeneratedBulletPoints')]
    #[Serializer\Type(GeneratedBulletPointsDto::class . '::class')]
    private ?GeneratedBulletPointsDto $generatedBulletPoints = null;

    public function getIcecatId(): ?int
    {
        return $this->icecatId;
    }

    public function setIcecatId(?int $icecatId): self
    {
        $this->icecatId = $icecatId;

        return $this;
    }

    public function getReleaseDate(): ?string
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(?string $releaseDate): self
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getEndOfLifeDate(): ?string
    {
        return $this->endOfLifeDate;
    }

    public function setEndOfLifeDate(?string $endOfLifeDate): self
    {
        $this->endOfLifeDate = $endOfLifeDate;

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

    public function getTitleInfo(): ?TitleInfoDto
    {
        return $this->titleInfo;
    }

    public function setTitleInfo(?TitleInfoDto $titleInfo): self
    {
        $this->titleInfo = $titleInfo;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getBrandId(): ?string
    {
        return $this->brandId;
    }

    public function setBrandId(?string $brandId): self
    {
        $this->brandId = $brandId;

        return $this;
    }

    public function getBrandLogo(): ?string
    {
        return $this->brandLogo;
    }

    public function setBrandLogo(?string $brandLogo): self
    {
        $this->brandLogo = $brandLogo;

        return $this;
    }

    public function getBrandInfo(): ?BrandInfoDto
    {
        return $this->brandInfo;
    }

    public function setBrandInfo(?BrandInfoDto $brandInfo): self
    {
        $this->brandInfo = $brandInfo;

        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;

        return $this;
    }

    public function getProductNameInfo(): ?ProductNameInfoDto
    {
        return $this->productNameInfo;
    }

    public function setProductNameInfo(?ProductNameInfoDto $productNameInfo): self
    {
        $this->productNameInfo = $productNameInfo;

        return $this;
    }

    public function getBrandPartCode(): ?string
    {
        return $this->brandPartCode;
    }

    public function setBrandPartCode(?string $brandPartCode): self
    {
        $this->brandPartCode = $brandPartCode;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getGTIN(): ?array
    {
        return $this->gTIN;
    }

    /** @param array<string>|null $gTIN */
    public function setGTIN(?array $gTIN): self
    {
        $this->gTIN = $gTIN;

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

    public function getProductFamily(): ?ProductFamilyDto
    {
        return $this->productFamily;
    }

    public function setProductFamily(?ProductFamilyDto $productFamily): self
    {
        $this->productFamily = $productFamily;

        return $this;
    }

    public function getProductSeries(): ?ProductSeriesDto
    {
        return $this->productSeries;
    }

    public function setProductSeries(?ProductSeriesDto $productSeries): self
    {
        $this->productSeries = $productSeries;

        return $this;
    }

    public function getDescription(): ?DescriptionDto
    {
        return $this->description;
    }

    public function setDescription(?DescriptionDto $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSummaryDescription(): ?SummaryDescriptionDto
    {
        return $this->summaryDescription;
    }

    public function setSummaryDescription(?SummaryDescriptionDto $summaryDescription): self
    {
        $this->summaryDescription = $summaryDescription;

        return $this;
    }

    public function getBulletPoints(): ?BulletPointsDto
    {
        return $this->bulletPoints;
    }

    public function setBulletPoints(?BulletPointsDto $bulletPoints): self
    {
        $this->bulletPoints = $bulletPoints;

        return $this;
    }

    public function getGeneratedBulletPoints(): ?GeneratedBulletPointsDto
    {
        return $this->generatedBulletPoints;
    }

    public function setGeneratedBulletPoints(?GeneratedBulletPointsDto $generatedBulletPoints): self
    {
        $this->generatedBulletPoints = $generatedBulletPoints;

        return $this;
    }
}
