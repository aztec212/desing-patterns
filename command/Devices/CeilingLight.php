<?php

namespace Command\Devices;

class CeilingLight
{
    public function on(): void
    {
        echo "Ceiling light on" . PHP_EOL;
    }

    public function off(): void
    {
        echo "Ceiling light off" . PHP_EOL;
    }

    public function dim(): void
    {
        echo "Ceiling light dim" . PHP_EOL;
    }
}
