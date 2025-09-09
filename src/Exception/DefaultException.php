<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Exception;

use RuntimeException;
use Throwable;

class DefaultException extends RuntimeException
{
    public function __construct(string $identifier, string $message, int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct(
            sprintf(
                '[ERROR] %s failed: %s',
                $identifier,
                $message
            ),
            $code,
            $previous
        );
    }
}
