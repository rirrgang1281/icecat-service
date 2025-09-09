<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use JMS\Serializer\Annotation as Serializer;

class ConfiguratorSettingDto
{
    #[Serializer\SerializedName('id')]
    private string $id;

    #[Serializer\SerializedName('productId')]
    private string $productId;

    #[Serializer\SerializedName('optionId')]
    private string $optionId;

    #[Serializer\SerializedName('groupId')]
    private string $groupId;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function setProductId(string $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    public function getOptionId(): string
    {
        return $this->optionId;
    }

    public function setOptionId(string $optionId): self
    {
        $this->optionId = $optionId;

        return $this;
    }

    public function getGroupId(): string
    {
        return $this->groupId;
    }

    public function setGroupId(string $groupId): self
    {
        $this->groupId = $groupId;

        return $this;
    }
}
