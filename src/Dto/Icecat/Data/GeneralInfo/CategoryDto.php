<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class CategoryDto
{
    #[Serializer\SerializedName('CategoryID')]
    private ?string $categoryId = null;

    #[Serializer\SerializedName('Name')]
    #[Serializer\Type(CategoryNameDto::class . '::class')]
    private ?CategoryNameDto $categoryName = null;

    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }

    public function setCategoryId(?string $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getCategoryName(): ?CategoryNameDto
    {
        return $this->categoryName;
    }

    public function setCategoryName(?CategoryNameDto $categoryName): self
    {
        $this->categoryName = $categoryName;

        return $this;
    }
}
