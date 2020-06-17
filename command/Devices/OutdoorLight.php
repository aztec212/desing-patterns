<?php

namespace Command\Devices;

class OutdoorLight
{
    public function on(): void
    {
        echo "Outdoor light is on" . PHP_EOL;
    }

    public function off(): void
    {
        echo "Outdoor light is off" . PHP_EOL;
    }
}
