<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data;

use JMS\Serializer\Annotation as Serializer;
use Sdn\IcecatService\Dto\Icecat\Data\FeatureLogos\FeatureLogoDto;
use Sdn\IcecatService\Dto\Icecat\Data\FeaturesGroups\FeaturesGroupsDto;
use Sdn\IcecatService\Dto\Icecat\Data\Gallery\GalleryDetailDto;
use Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo\GeneralInfoDto;
use Sdn\IcecatService\Dto\Icecat\Data\Image\ImageDto;
use Sdn\IcecatService\Dto\Icecat\Data\Multimedia\MultimediaDto;
use Sdn\IcecatService\Dto\Icecat\Data\ProductRelated\ProductRelatedDto;
use Sdn\IcecatService\Dto\Icecat\Data\ProductStory\ProductStoryDto;
use Sdn\IcecatService\Dto\Icecat\Data\ReasonsToBuy\ReasonsToBuyDto;
use Sdn\IcecatService\Dto\Icecat\Data\Reviews\ReviewsDto;
use Sdn\IcecatService\Dto\Icecat\Data\TaxonomyDescriptions\TaxonomyDescriptionsDto;
use Sdn\IcecatService\Dto\Icecat\Data\Variants\VariantsDto;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class DataDto
{
    #[Serializer\SerializedName('GeneralInfo')]
    #[Serializer\Type(GeneralInfoDto::class . '::class')]
    private ?GeneralInfoDto $generalInfo = null;

    #[Serializer\SerializedName('Image')]
    #[Serializer\Type(ImageDto::class . '::class')]
    private ?ImageDto $image = null;

    /** @var MultimediaDto[]|null */
    #[Serializer\SerializedName('Multimedia')]
    #[Serializer\Type('array<Sdn\IcecatService\Dto\Icecat\Data\Multimedia\MultimediaDto>')]
    private ?array $multimedia = null;

    /** @var GalleryDetailDto[]|null */
    #[Serializer\SerializedName('Gallery')]
    #[Serializer\Type('array<Sdn\IcecatService\Dto\Icecat\Data\Gallery\GalleryDetailDto>')]
    private ?array $gallery = null;

    /** @var FeaturesGroupsDto[]|null */
    #[Serializer\SerializedName('FeaturesGroups')]
    #[Serializer\Type('array<Sdn\IcecatService\Dto\Icecat\Data\FeaturesGroups\FeaturesGroupsDto>')]
    private ?array $featuresGroups = null;

    /** @var FeatureLogoDto[]|null */
    #[Serializer\SerializedName('FeatureLogos')]
    #[Serializer\Type('array<Sdn\IcecatService\Dto\Icecat\Data\FeatureLogos\FeatureLogoDto>')]
    private ?array $featuresLogos = null;

    /** @var ReasonsToBuyDto[]|null */
    #[Serializer\SerializedName('ReasonsToBuy')]
    #[Serializer\Type('array<Sdn\IcecatService\Dto\Icecat\Data\ReasonsToBuy\ReasonsToBuyDto>')]
    private ?array $reasonsToBuy = null;

    /** @var ReviewsDto[]|null */
    #[Serializer\SerializedName('Reviews')]
    #[Serializer\Type('array<Sdn\IcecatService\Dto\Icecat\Data\Reviews\ReviewsDto>')]
    private ?array $reviews = null;

    /** @var TaxonomyDescriptionsDto[]|null */
    #[Serializer\SerializedName('TaxonomyDescriptions')]
    #[Serializer\Type('array<Sdn\IcecatService\Dto\Icecat\Data\TaxonomyDescriptions\TaxonomyDescriptionsDto>')]
    private ?array $taxonomyDescriptions = null;

    /** @var ProductRelatedDto[]|null */
    #[Serializer\SerializedName('ProductRelated')]
    #[Serializer\Type('array<Sdn\IcecatService\Dto\Icecat\Data\ProductRelated\ProductRelatedDto>')]
    private ?array $productRelated = null;

    /** @var VariantsDto[]|null */
    #[Serializer\SerializedName('Variants')]
    #[Serializer\Type('array<Sdn\IcecatService\Dto\Icecat\Data\Variants\VariantsDto>')]
    private ?array $variants = null;

    /** @var ProductStoryDto[]|null */
    #[Serializer\SerializedName('ProductStory')]
    #[Serializer\Type('array<Sdn\IcecatService\Dto\Icecat\Data\ProductStory\ProductStoryDto>')]
    private ?array $productStory = null;

    public function getGeneralInfo(): ?GeneralInfoDto
    {
        return $this->generalInfo;
    }

    public function setGeneralInfo(?GeneralInfoDto $generalInfo): self
    {
        $this->generalInfo = $generalInfo;

        return $this;
    }

    public function getImage(): ?ImageDto
    {
        return $this->image;
    }

    public function setImage(?ImageDto $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return MultimediaDto[]|null
     */
    public function getMultimedia(): ?array
    {
        return $this->multimedia;
    }

    /** @param MultimediaDto[]|null $multimedia */
    public function setMultimedia(?array $multimedia): self
    {
        $this->multimedia = $multimedia;

        return $this;
    }

    /**
     * @return GalleryDetailDto[]|null
     */
    public function getGallery(): ?array
    {
        return $this->gallery;
    }

    /** @param GalleryDetailDto[]|null $gallery */
    public function setGallery(?array $gallery): self
    {
        $this->gallery = $gallery;

        return $this;
    }

    /**
     * @return FeaturesGroupsDto[]|null
     */
    public function getFeaturesGroups(): ?array
    {
        return $this->featuresGroups;
    }

    /** @param FeaturesGroupsDto[]|null $featuresGroups */
    public function setFeaturesGroups(?array $featuresGroups): self
    {
        $this->featuresGroups = $featuresGroups;

        return $this;
    }

    /**
     * @return FeatureLogoDto[]|null
     */
    public function getFeaturesLogos(): ?array
    {
        return $this->featuresLogos;
    }

    /** @param FeatureLogoDto[]|null $featuresLogos */
    public function setFeaturesLogos(?array $featuresLogos): self
    {
        $this->featuresLogos = $featuresLogos;

        return $this;
    }

    /**
     * @return ReasonsToBuyDto[]|null
     */
    public function getReasonsToBuy(): ?array
    {
        return $this->reasonsToBuy;
    }

    /** @param ReasonsToBuyDto[]|null $reasonsToBuy */
    public function setReasonsToBuy(?array $reasonsToBuy): self
    {
        $this->reasonsToBuy = $reasonsToBuy;

        return $this;
    }

    /**
     * @return ReviewsDto[]|null
     */
    public function getReviews(): ?array
    {
        return $this->reviews;
    }

    /** @param ReviewsDto[]|null $reviews */
    public function setReviews(?array $reviews): self
    {
        $this->reviews = $reviews;

        return $this;
    }

    /**
     * @return TaxonomyDescriptionsDto[]|null
     */
    public function getTaxonomyDescriptions(): ?array
    {
        return $this->taxonomyDescriptions;
    }

    /** @param TaxonomyDescriptionsDto[]|null $taxonomyDescriptions */
    public function setTaxonomyDescriptions(?array $taxonomyDescriptions): self
    {
        $this->taxonomyDescriptions = $taxonomyDescriptions;

        return $this;
    }

    /**
     * @return ProductRelatedDto[]|null
     */
    public function getProductRelated(): ?array
    {
        return $this->productRelated;
    }

    /** @param ProductRelatedDto[]|null $productRelated */
    public function setProductRelated(?array $productRelated): self
    {
        $this->productRelated = $productRelated;

        return $this;
    }

    /**
     * @return VariantsDto[]|null
     */
    public function getVariants(): ?array
    {
        return $this->variants;
    }

    /** @param VariantsDto[]|null $variants */
    public function setVariants(?array $variants): self
    {
        $this->variants = $variants;

        return $this;
    }

    /**
     * @return ProductStoryDto[]|null
     */
    public function getProductStory(): ?array
    {
        return $this->productStory;
    }

    /** @param ProductStoryDto[]|null $productStory */
    public function setProductStory(?array $productStory): self
    {
        $this->productStory = $productStory;

        return $this;
    }
}
