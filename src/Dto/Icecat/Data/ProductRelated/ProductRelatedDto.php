<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\ProductRelated;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\ProductRelated
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class ProductRelatedDto
{
    #[Serializer\SerializedName('ID')]
    private ?int $id = null;

    #[Serializer\SerializedName('CategoryID')]
    private ?int $categoryId = null;

    #[Serializer\SerializedName('Preferred')]
    private ?int $preferred = null;

    #[Serializer\SerializedName('IcecatID')]
    private ?int $icecatID = null;

    #[Serializer\SerializedName('ProductCode')]
    private ?string $productCode = null;

    #[Serializer\SerializedName('ThumbPic')]
    private ?string $thumbPic = null;

    #[Serializer\SerializedName('ProductName')]
    private ?string $productName = null;

    #[Serializer\SerializedName('Brand')]
    private ?string $brand = null;

    #[Serializer\SerializedName('BrandID')]
    private ?int $brandId = null;

    /** @var ProductRelatedLocalesDto[]|null */
    #[Serializer\SerializedName('ProductRelatedLocales')]
    #[Serializer\Type('array<Sdn\IcecatService\Dto\Icecat\Data\ProductRelated\ProductRelatedLocalesDto>')]
    private ?array $productRelatedLocales = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function setCategoryId(?int $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getPreferred(): ?int
    {
        return $this->preferred;
    }

    public function setPreferred(?int $preferred): self
    {
        $this->preferred = $preferred;

        return $this;
    }

    public function getIcecatID(): ?int
    {
        return $this->icecatID;
    }

    public function setIcecatID(?int $icecatID): self
    {
        $this->icecatID = $icecatID;

        return $this;
    }

    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    public function setProductCode(?string $productCode): self
    {
        $this->productCode = $productCode;

        return $this;
    }

    public function getThumbPic(): ?string
    {
        return $this->thumbPic;
    }

    public function setThumbPic(?string $thumbPic): self
    {
        $this->thumbPic = $thumbPic;

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

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getBrandId(): ?int
    {
        return $this->brandId;
    }

    public function setBrandId(?int $brandId): self
    {
        $this->brandId = $brandId;

        return $this;
    }

    /**
     * @return ProductRelatedLocalesDto[]|null
     */
    public function getProductRelatedLocales(): ?array
    {
        return $this->productRelatedLocales;
    }

    /** @param ProductRelatedLocalesDto[]|null $productRelatedLocales */
    public function setProductRelatedLocales(?array $productRelatedLocales): self
    {
        $this->productRelatedLocales = $productRelatedLocales;

        return $this;
    }
}
