<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\FeatureLogos;

use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\FeatureLogos
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class FeatureLogoDto
{
    #[Serializer\SerializedName('LogoPic')]
    private ?string $logoPic = null;

    #[Serializer\SerializedName('Width')]
    private ?string $width = null;

    #[Serializer\SerializedName('Height')]
    private ?string $height = null;

    #[Serializer\SerializedName('Size')]
    private ?string $size = null;

    #[Serializer\SerializedName('ThumbPic')]
    private ?string $thumbPic = null;

    #[Serializer\SerializedName('FeatureID')]
    private ?string $featureId = null;

    #[Serializer\SerializedName('Value')]
    private ?string $value = null;

    #[Serializer\SerializedName('KeyLogo')]
    private ?int $keyLogo = null;

    #[Serializer\SerializedName('Description')]
    #[Serializer\Type(FeatureLogoDescriptionDto::class . '::class')]
    private ?FeatureLogoDescriptionDto $description = null;

    public function getLogoPic(): ?string
    {
        return $this->logoPic;
    }

    public function setLogoPic(?string $logoPic): self
    {
        $this->logoPic = $logoPic;

        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

    public function setWidth(?string $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(?string $height): self
    {
        $this->height = $height;

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

    public function getThumbPic(): ?string
    {
        return $this->thumbPic;
    }

    public function setThumbPic(?string $thumbPic): self
    {
        $this->thumbPic = $thumbPic;

        return $this;
    }

    public function getFeatureId(): ?string
    {
        return $this->featureId;
    }

    public function setFeatureId(?string $featureId): self
    {
        $this->featureId = $featureId;

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

    public function getKeyLogo(): ?int
    {
        return $this->keyLogo;
    }

    public function setKeyLogo(?int $keyLogo): self
    {
        $this->keyLogo = $keyLogo;

        return $this;
    }

    public function getDescription(): ?FeatureLogoDescriptionDto
    {
        return $this->description;
    }

    public function setDescription(?FeatureLogoDescriptionDto $description): self
    {
        $this->description = $description;

        return $this;
    }
}
