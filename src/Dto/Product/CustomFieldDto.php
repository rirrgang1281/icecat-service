<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Dto\Product;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use JMS\Serializer\Annotation as Serializer;

class CustomFieldDto
{
    #[Serializer\SerializedName('brand')]
    private ?string $brand = null;

    /** @var Collection<int, PackageDto> */
    #[Serializer\SerializedName('packages')]
    #[Serializer\SkipWhenEmpty]
    private Collection $packages;

    public function __construct()
    {
        $this->packages = new ArrayCollection();
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

    /** @return Collection<int, PackageDto> */
    public function getPackages(): Collection
    {
        return $this->packages;
    }

    public function addPackages(PackageDto $package): self
    {
        $this->packages->add($package);

        return $this;
    }
}
