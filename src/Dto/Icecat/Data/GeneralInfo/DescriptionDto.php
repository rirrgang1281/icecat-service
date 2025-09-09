<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo;

use DateTimeInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @package:    Sdn\IcecatService\Dto\Icecat\Data\GeneralInfo
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class DescriptionDto
{
    #[Serializer\SerializedName('ID')]
    private ?string $id = null;

    #[Serializer\SerializedName('LongDesc')]
    private ?string $longDesc = null;

    #[Serializer\SerializedName('LongProductName')]
    private ?string $longProductName = null;

    #[Serializer\SerializedName('MiddleDesc')]
    private ?string $middleDesc = null;

    #[Serializer\SerializedName('Disclaimer')]
    private ?string $disclaimer = null;

    #[Serializer\SerializedName('ManualPDFURL')]
    private ?string $manualPdfUrl = null;

    #[Serializer\SerializedName('ManualPDFSize')]
    private ?string $manualPdfSize = null;

    #[Serializer\SerializedName('LeafletPDFURL')]
    private ?string $leafletPdfUrl = null;

    #[Serializer\SerializedName('PDFSize')]
    private ?string $pdfSize = null;

    #[Serializer\SerializedName('URL')]
    private ?string $url = null;

    #[Serializer\SerializedName('WarrantyInfo')]
    private ?string $warrantyInfo = null;

    #[Serializer\SerializedName('Updated')]
    // #[Serializer\Type("DateTimeInterface<'Y-m-d H:i:s'>")]
    private ?string $updated = null;

    #[Serializer\SerializedName('Language')]
    private ?string $language = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getLongDesc(): ?string
    {
        return $this->longDesc;
    }

    public function setLongDesc(?string $longDesc): self
    {
        $this->longDesc = $longDesc;

        return $this;
    }

    public function getLongProductName(): ?string
    {
        return $this->longProductName;
    }

    public function setLongProductName(?string $longProductName): self
    {
        $this->longProductName = $longProductName;

        return $this;
    }

    public function getMiddleDesc(): ?string
    {
        return $this->middleDesc;
    }

    public function setMiddleDesc(?string $middleDesc): self
    {
        $this->middleDesc = $middleDesc;

        return $this;
    }

    public function getDisclaimer(): ?string
    {
        return $this->disclaimer;
    }

    public function setDisclaimer(?string $disclaimer): self
    {
        $this->disclaimer = $disclaimer;

        return $this;
    }

    public function getManualPdfUrl(): ?string
    {
        return $this->manualPdfUrl;
    }

    public function setManualPdfUrl(?string $manualPdfUrl): self
    {
        $this->manualPdfUrl = $manualPdfUrl;

        return $this;
    }

    public function getManualPdfSize(): ?string
    {
        return $this->manualPdfSize;
    }

    public function setManualPdfSize(?string $manualPdfSize): self
    {
        $this->manualPdfSize = $manualPdfSize;

        return $this;
    }

    public function getLeafletPdfUrl(): ?string
    {
        return $this->leafletPdfUrl;
    }

    public function setLeafletPdfUrl(?string $leafletPdfUrl): self
    {
        $this->leafletPdfUrl = $leafletPdfUrl;

        return $this;
    }

    public function getPdfSize(): ?string
    {
        return $this->pdfSize;
    }

    public function setPdfSize(?string $pdfSize): self
    {
        $this->pdfSize = $pdfSize;

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

    public function getWarrantyInfo(): ?string
    {
        return $this->warrantyInfo;
    }

    public function setWarrantyInfo(?string $warrantyInfo): self
    {
        $this->warrantyInfo = $warrantyInfo;

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
}
