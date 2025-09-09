<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Service;

use Exception;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerInterface;
use RuntimeException;
use Sdn\IcecatService\Exception\JsonException;

/**
 * @package:    Sdn\IcecatService\Service
 * @author:     SoftDev-Nord, Rene Irrgang
 * @copyright:  Copyright © 2024, SoftDev-Nord
 */
class JmsSerializerService
{
    public function __construct(
        private readonly SerializerInterface $serializer
    ) {
    }

    public function deserialize(string $data, string $type): mixed
    {
        try {
            return $this->serializer->deserialize($data, $type, 'json');
        } catch (Exception $exception) {
            throw new RuntimeException('Unable to serialize data: ' . $exception->getMessage());
        }
    }

    /** @param object|array<string, mixed> $data */
    public function serialize(object|array $data): string
    {
        return $this->serializer
            ->serialize(
                $data,
                'json',
                (new SerializationContext())
                    ->setSerializeNull(true)
            );
    }

    /**
     * @throws JsonException
     *
     * @return array<mixed>
     */
    public function decode(string $json): array
    {
        $payload = \json_decode(
            $json,
            true,
            512,
            JSON_THROW_ON_ERROR
        );

        if (!is_array($payload)) {
            throw new JsonException('DECODE', $json);
        }

        return $payload;
    }

    /**
     * @param array<mixed> $payload
     *
     * @throws JsonException
     */
    public function encode(array $payload): string
    {
        $json = \json_encode($payload);
        if (is_bool($json)) {
            throw new JsonException('ENCODE', var_export($payload, true));
        }

        return $json;
    }
}
