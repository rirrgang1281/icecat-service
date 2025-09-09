<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Service;

use Exception;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Sdn\IcecatService\Client\IceCatServiceClient;
use Sdn\IcecatService\Dto\Icecat\Data\DataDto;
use Sdn\IcecatService\Dto\Icecat\EnglishProductContentDto;
use Sdn\IcecatService\Dto\Icecat\GermanProductContentDto;
use Sdn\IcecatService\Dto\Icecat\MultilingualProductContentDto;
use Sdn\IcecatService\Dto\Icecat\ProductDto;

class ProductService
{
    public function __construct(
        private readonly LoggerInterface $logger,
        private readonly JmsSerializerService $jmsSerializerService,
        private readonly IceCatServiceClient $iceCatServiceClient
    ) {
    }

    public function getProductContent(
        string $language,
        string $brand,
        string $productCode
    ): ?DataDto {
        $data = $this->iceCatServiceClient->makeRequest($language, $brand, $productCode);

        if (!$data instanceof ResponseInterface) {
            return null;
        }

        /** @var ProductDto $product */
        $product = $this->jmsSerializerService->deserialize(
            $data->getBody()->getContents(),
            ProductDto::class
        );

        return $product->getData();
    }

    public function getProductContentByBrandAndProductCode(string $brand, string $productCode): ?MultilingualProductContentDto
    {
        $productContent = null;

        $germanProductResponse = $this->getGermanProductContent($brand, $productCode);
        $germanProductContent = null;
        if ($germanProductResponse && $germanProductResponse->getBody()->getContents()) {
            /** @var GermanProductContentDto $germanProductContent */
            $germanProductContent = $this->jmsSerializerService->deserialize(
                $germanProductResponse->getBody()->getContents(),
                GermanProductContentDto::class
            );
        }

        $englishProductResponse = $this->getEnglishProductContent($brand, $productCode);
        $englishProductContent = null;
        if ($englishProductResponse && $englishProductResponse->getBody()->getContents()) {
            /** @var EnglishProductContentDto $englishProductContent */
            $englishProductContent = $this->jmsSerializerService->deserialize(
                $englishProductResponse->getBody()->getContents(),
                EnglishProductContentDto::class
            );
        }

        try {
            $productContent = (new MultilingualProductContentDto())
                ->setGermanProductContent($germanProductContent)
                ->setEnglishProductContent($englishProductContent);
        } catch (Exception $exception) {
            $this->logger->error(
                $exception->getMessage(),
                ['trace' => $exception->getTraceAsString()]
            );
        }

        return $productContent;
    }

    private function getGermanProductContent(string $brand, string $productCode): ?ResponseInterface
    {
        return $this->iceCatServiceClient->makeRequest('de', $brand, $productCode);
    }

    private function getEnglishProductContent(string $brand, string $productCode): ?ResponseInterface
    {
        return $this->iceCatServiceClient->makeRequest('en', $brand, $productCode);
    }
}
