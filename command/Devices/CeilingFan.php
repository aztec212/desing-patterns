<?php

namespace Command\Devices;

class CeilingFan
{
    const HIGH = 3;
    const MEDIUM = 2;
    const LOW = 1;
    const OFF = 0;
    protected string $location;
    protected int $speed;

    public function __construct(string $location)
    {
        $this->location = $location;
        $this->speed = static::OFF;
    }


    public function high(): void
    {
        $this->speed = static::HIGH;
        echo "Ceiling fan set high speed" . PHP_EOL;
    }

    public function medium(): void
    {
        $this->speed = static::MEDIUM;
        echo "Ceiling fan set medium speed" . PHP_EOL;
    }

    public function low(): void
    {
        $this->speed = static::LOW;
        echo "Ceiling fan set low speed" . PHP_EOL;
    }

    public function off(): void
    {
        $this->speed = static::OFF;
        echo "Ceiling fan off" . PHP_EOL;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }
}
