<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\Image;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\Image
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class ImageDto
{
    #[Serializer\SerializedName('HighPic')]
    private ?string $highPic = null;

    #[Serializer\SerializedName('HighPicSize')]
    private ?string $highPicSize = null;

    #[Serializer\SerializedName('HighPicHeight')]
    private ?string $highPicHeight = null;

    #[Serializer\SerializedName('HighPicWidth')]
    private ?string $highPicWidth = null;

    #[Serializer\SerializedName('LowPic')]
    private ?string $lowPic = null;

    #[Serializer\SerializedName('LowPicSize')]
    private ?string $lowPicSize = null;

    #[Serializer\SerializedName('LowPicHeight')]
    private ?string $lowPicHeight = null;

    #[Serializer\SerializedName('LowPicWidth')]
    private ?string $lowPicWidth = null;

    #[Serializer\SerializedName('Pic500x500')]
    private ?string $pic500x500 = null;

    #[Serializer\SerializedName('Pic500x500Size')]
    private ?string $pic500x500Size = null;

    #[Serializer\SerializedName('Pic500x500Height')]
    private ?string $pic500x500Height = null;

    #[Serializer\SerializedName('Pic500x500Width')]
    private ?string $pic500x500Width = null;

    #[Serializer\SerializedName('ThumbPic')]
    private ?string $thumbPic = null;

    #[Serializer\SerializedName('ThumbPicSize')]
    private ?string $thumbPicSize = null;

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

    public function getHighPicHeight(): ?string
    {
        return $this->highPicHeight;
    }

    public function setHighPicHeight(?string $highPicHeight): self
    {
        $this->highPicHeight = $highPicHeight;

        return $this;
    }

    public function getHighPicWidth(): ?string
    {
        return $this->highPicWidth;
    }

    public function setHighPicWidth(?string $highPicWidth): self
    {
        $this->highPicWidth = $highPicWidth;

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

    public function getLowPicSize(): ?string
    {
        return $this->lowPicSize;
    }

    public function setLowPicSize(?string $lowPicSize): self
    {
        $this->lowPicSize = $lowPicSize;

        return $this;
    }

    public function getLowPicHeight(): ?string
    {
        return $this->lowPicHeight;
    }

    public function setLowPicHeight(?string $lowPicHeight): self
    {
        $this->lowPicHeight = $lowPicHeight;

        return $this;
    }

    public function getLowPicWidth(): ?string
    {
        return $this->lowPicWidth;
    }

    public function setLowPicWidth(?string $lowPicWidth): self
    {
        $this->lowPicWidth = $lowPicWidth;

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
}
