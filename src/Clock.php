<?php

declare(strict_types=1);

namespace Effectra\Clock;

use Psr\Clock\ClockInterface;

class Clock implements ClockInterface
{
    /**
     * Returns the current time as a DateTimeImmutable object.
     *
     * @return \DateTimeImmutable
     */
    public function now(): \DateTimeImmutable
    {
        return new \DateTimeImmutable();
    }

    /**
     * Returns the current timestamp as an integer.
     *
     * @return int
     */
    public function timestamp(): int
    {
        return time();
    }
}