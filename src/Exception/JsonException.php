<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Exception;

use Exception;
use Throwable;

class JsonException extends Exception
{
    public function __construct(string $operation, string $payload, int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct(
            sprintf(
                '[ERROR] %s failed for : %s',
                $operation,
                $payload
            ),
            $code,
            $previous
        );
    }
}
