<?php

namespace Command\Devices;

class Light
{
    public function on(): void
    {
        echo "Light on" . PHP_EOL;
    }

    public function off(): void
    {
        echo "Light off" . PHP_EOL;
    }
}
