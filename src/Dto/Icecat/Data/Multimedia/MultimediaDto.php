<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\Multimedia;

use DateTimeInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\Multimedia
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class MultimediaDto
{
    #[Serializer\SerializedName('ID')]
    private ?string $id = null;

    #[Serializer\SerializedName('URL')]
    private ?string $url = null;

    #[Serializer\SerializedName('Type')]
    private ?string $type = null;

    #[Serializer\SerializedName('ContentType')]
    private ?string $contentType = null;

    #[Serializer\SerializedName('KeepAsUrl')]
    private ?string $keepAsUrl = null;

    #[Serializer\SerializedName('Description')]
    private ?string $description = null;

    #[Serializer\SerializedName('Size')]
    private ?string $size = null;

    #[Serializer\SerializedName('IsPrivate')]
    private ?string $isPrivate = null;

    #[Serializer\SerializedName('Updated')]
    // #[Serializer\Type("DateTimeInterface<'Y-m-d H:i:s'>")]
    private ?string $updated = null;

    #[Serializer\SerializedName('Language')]
    private ?string $language = null;

    #[Serializer\SerializedName('IsVideo')]
    private bool $isVideo = false;

    #[Serializer\SerializedName('PreviewURL')]
    private ?string $preview360Url = null;

    #[Serializer\SerializedName('PreviewSize')]
    private ?string $previewSize = null;

    #[Serializer\SerializedName('PreviewHeight')]
    private ?string $previewHeight = null;

    #[Serializer\SerializedName('PreviewWidth')]
    private ?string $previewWidth = null;

    #[Serializer\SerializedName('ThumbUrl')]
    private ?string $thumbUrl = null;

    #[Serializer\SerializedName('PreviewUrl')]
    private ?string $previewUrl = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

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

    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function setContentType(?string $contentType): self
    {
        $this->contentType = $contentType;

        return $this;
    }

    public function getKeepAsUrl(): ?string
    {
        return $this->keepAsUrl;
    }

    public function setKeepAsUrl(?string $keepAsUrl): self
    {
        $this->keepAsUrl = $keepAsUrl;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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

    public function getIsPrivate(): ?string
    {
        return $this->isPrivate;
    }

    public function setIsPrivate(?string $isPrivate): self
    {
        $this->isPrivate = $isPrivate;

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

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function isVideo(): bool
    {
        return $this->isVideo;
    }

    public function setIsVideo(bool $isVideo): self
    {
        $this->isVideo = $isVideo;

        return $this;
    }

    public function getPreview360Url(): ?string
    {
        return $this->preview360Url;
    }

    public function setPreview360Url(?string $preview360Url): self
    {
        $this->preview360Url = $preview360Url;

        return $this;
    }

    public function getPreviewSize(): ?string
    {
        return $this->previewSize;
    }

    public function setPreviewSize(?string $previewSize): self
    {
        $this->previewSize = $previewSize;

        return $this;
    }

    public function getPreviewHeight(): ?string
    {
        return $this->previewHeight;
    }

    public function setPreviewHeight(?string $previewHeight): self
    {
        $this->previewHeight = $previewHeight;

        return $this;
    }

    public function getPreviewWidth(): ?string
    {
        return $this->previewWidth;
    }

    public function setPreviewWidth(?string $previewWidth): self
    {
        $this->previewWidth = $previewWidth;

        return $this;
    }

    public function getThumbUrl(): ?string
    {
        return $this->thumbUrl;
    }

    public function setThumbUrl(?string $thumbUrl): self
    {
        $this->thumbUrl = $thumbUrl;

        return $this;
    }

    public function getPreviewUrl(): ?string
    {
        return $this->previewUrl;
    }

    public function setPreviewUrl(?string $previewUrl): self
    {
        $this->previewUrl = $previewUrl;

        return $this;
    }
}
