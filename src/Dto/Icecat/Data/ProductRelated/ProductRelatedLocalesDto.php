<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\ProductRelated;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\ProductRelated
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class ProductRelatedLocalesDto
{
    #[Serializer\SerializedName('ID')]
    private ?int $id = null;

    #[Serializer\SerializedName('Language')]
    private ?string $language = null;

    #[Serializer\SerializedName('Preferred')]
    private ?int $preferred = null;

    #[Serializer\SerializedName('StartDate')]
    private ?string $startDate = null;

    #[Serializer\SerializedName('EndDate')]
    private ?string $endDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

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

    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    public function setStartDate(?string $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    public function setEndDate(?string $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }
}
