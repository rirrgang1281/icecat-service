<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use RuntimeException;

readonly class IceCatServiceClient
{
    public function __construct(
        private Client $client,
        private LoggerInterface $logger,
        private string $icecatBaseUrl,
        private string $icecatUser,
        private bool $isIcecatServiceEnabled
    ) {
    }

    public function makeRequest(string $language, string $brand, string $productCode): ?ResponseInterface
    {
        $response = null;
        if (!$this->isIcecatServiceEnabled) {
            $this->logger->info('Icecat service is disabled');

            return new Response(500, [], 'Icecat service disabled');
        }

        try {
            $uri = sprintf(
                '%s?UserName=%s&Language=%s&Brand=%s&ProductCode=%s',
                $this->icecatBaseUrl,
                $this->icecatUser,
                $language,
                $brand,
                $productCode
            );

            $response = $this->client->request('GET', $uri);
        } catch (RuntimeException $exception) {
            $this->logger->error('Icecat request failed: ' . $exception->getMessage());
        }

        return $response;
    }
}
