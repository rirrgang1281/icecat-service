<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\ReasonsToBuy;

use DateTimeInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\ReasonsToBuy
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class ReasonsToBuyDto
{
    #[Serializer\SerializedName('ReasonToBuyID')]
    private ?string $reasonToBuyID = null;

    #[Serializer\SerializedName('Value')]
    private ?string $value = null;

    #[Serializer\SerializedName('HighPic')]
    private ?string $highPic = null;

    #[Serializer\SerializedName('HighPicSize')]
    private ?string $highPicSize = null;

    #[Serializer\SerializedName('No')]
    private ?string $no = null;

    #[Serializer\SerializedName('Title')]
    private ?string $title = null;

    #[Serializer\SerializedName('Language')]
    private ?string $language = null;

    #[Serializer\SerializedName('Updated')]
    // #[Serializer\Type("DateTimeInterface<'Y-m-d H:i:s'>")]
    private ?string $updated = null;

    #[Serializer\SerializedName('Origin')]
    private ?string $origin = null;

    #[Serializer\SerializedName('IsPrivate')]
    private ?string $isPrivate = null;

    public function getReasonToBuyID(): ?string
    {
        return $this->reasonToBuyID;
    }

    public function setReasonToBuyID(?string $reasonToBuyID): self
    {
        $this->reasonToBuyID = $reasonToBuyID;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getHighPic(): ?string
    {
        return $this->highPic;
    }

    public function setHighPic(?string $highPic): self
    {
        $this->highPic = $highPic;

        return $this;
    }

    public function getHighPicSize(): ?string
    {
        return $this->highPicSize;
    }

    public function setHighPicSize(?string $highPicSize): self
    {
        $this->highPicSize = $highPicSize;

        return $this;
    }

    public function getNo(): ?string
    {
        return $this->no;
    }

    public function setNo(?string $no): self
    {
        $this->no = $no;

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

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getUpdated(): ?string
    {
        return $this->updated;
    }

    public function setUpdated(?string $updated): self
    {
        $this->updated = $updated;

        return $this;
    }

    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    public function setOrigin(?string $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    public function getIsPrivate(): ?string
    {
        return $this->isPrivate;
    }

    public function setIsPrivate(?string $isPrivate): self
    {
        $this->isPrivate = $isPrivate;

        return $this;
    }
}
