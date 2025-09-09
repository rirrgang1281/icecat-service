<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\Gallery;

use DateTimeInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\Gallery
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class GalleryDetailDto
{
    #[Serializer\SerializedName('ID')]
    private ?string $id = null;

    #[Serializer\SerializedName('LowPic')]
    private ?string $lowPic = null;

    #[Serializer\SerializedName('LowSize')]
    private ?string $lowSize = null;

    #[Serializer\SerializedName('LowHeight')]
    private ?string $lowHeight = null;

    #[Serializer\SerializedName('LowWidth')]
    private ?string $lowWidth = null;

    #[Serializer\SerializedName('ThumbPic')]
    private ?string $thumbPic = null;

    #[Serializer\SerializedName('ThumbPicSize')]
    private ?string $thumbPicSize = null;

    #[Serializer\SerializedName('Pic')]
    private ?string $pic = null;

    #[Serializer\SerializedName('Size')]
    private ?string $size = null;

    #[Serializer\SerializedName('PicHeight')]
    private ?string $picHeight = null;

    #[Serializer\SerializedName('PicWidth')]
    private ?string $picWidth = null;

    #[Serializer\SerializedName('Pic500x500')]
    private ?string $pic500x500 = null;

    #[Serializer\SerializedName('Pic500x500Size')]
    private ?string $pic500x500Size = null;

    #[Serializer\SerializedName('Pic500x500Height')]
    private ?string $pic500x500Height = null;

    #[Serializer\SerializedName('Pic500x500Width')]
    private ?string $pic500x500Width = null;

    #[Serializer\SerializedName('No')]
    private ?string $number = null;

    #[Serializer\SerializedName('IsMain')]
    private ?string $isMain = null;

    #[Serializer\SerializedName('Updated')]
    // #[Serializer\Type("DateTimeInterface<'Y-m-d H:i:s'>")]
    private ?string $updated = null;

    #[Serializer\SerializedName('IsPrivate')]
    private ?string $isPrivate = null;

    #[Serializer\SerializedName('Type')]
    private ?string $type = null;

    #[Serializer\SerializedName('Attributes')]
    #[Serializer\Type(GalleryDetailAttributesDto::class)]
    private ?GalleryDetailAttributesDto $attributes = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getLowPic(): ?string
    {
        return $this->lowPic;
    }

    public function setLowPic(?string $lowPic): self
    {
        $this->lowPic = $lowPic;

        return $this;
    }

    public function getLowSize(): ?string
    {
        return $this->lowSize;
    }

    public function setLowSize(?string $lowSize): self
    {
        $this->lowSize = $lowSize;

        return $this;
    }

    public function getLowHeight(): ?string
    {
        return $this->lowHeight;
    }

    public function setLowHeight(?string $lowHeight): self
    {
        $this->lowHeight = $lowHeight;

        return $this;
    }

    public function getLowWidth(): ?string
    {
        return $this->lowWidth;
    }

    public function setLowWidth(?string $lowWidth): self
    {
        $this->lowWidth = $lowWidth;

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

    public function getThumbPicSize(): ?string
    {
        return $this->thumbPicSize;
    }

    public function setThumbPicSize(?string $thumbPicSize): self
    {
        $this->thumbPicSize = $thumbPicSize;

        return $this;
    }

    public function getPic(): ?string
    {
        return $this->pic;
    }

    public function setPic(?string $pic): self
    {
        $this->pic = $pic;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(?string $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getPicHeight(): ?string
    {
        return $this->picHeight;
    }

    public function setPicHeight(?string $picHeight): self
    {
        $this->picHeight = $picHeight;

        return $this;
    }

    public function getPicWidth(): ?string
    {
        return $this->picWidth;
    }

    public function setPicWidth(?string $picWidth): self
    {
        $this->picWidth = $picWidth;

        return $this;
    }

    public function getPic500x500(): ?string
    {
        return $this->pic500x500;
    }

    public function setPic500x500(?string $pic500x500): self
    {
        $this->pic500x500 = $pic500x500;

        return $this;
    }

    public function getPic500x500Size(): ?string
    {
        return $this->pic500x500Size;
    }

    public function setPic500x500Size(?string $pic500x500Size): self
    {
        $this->pic500x500Size = $pic500x500Size;

        return $this;
    }

    public function getPic500x500Height(): ?string
    {
        return $this->pic500x500Height;
    }

    public function setPic500x500Height(?string $pic500x500Height): self
    {
        $this->pic500x500Height = $pic500x500Height;

        return $this;
    }

    public function getPic500x500Width(): ?string
    {
        return $this->pic500x500Width;
    }

    public function setPic500x500Width(?string $pic500x500Width): self
    {
        $this->pic500x500Width = $pic500x500Width;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getIsMain(): ?string
    {
        return $this->isMain;
    }

    public function setIsMain(?string $isMain): self
    {
        $this->isMain = $isMain;

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

    public function getIsPrivate(): ?string
    {
        return $this->isPrivate;
    }

    public function setIsPrivate(?string $isPrivate): self
    {
        $this->isPrivate = $isPrivate;

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

    public function getAttributes(): ?GalleryDetailAttributesDto
    {
        return $this->attributes;
    }

    public function setAttributes(?GalleryDetailAttributesDto $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }
}
