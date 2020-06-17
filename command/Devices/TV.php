<?php

namespace Command\Devices;

class TV
{
    public function on(): void
    {
        echo "TV is on" . PHP_EOL;
    }

    public function off(): void
    {
        echo "TV is off" . PHP_EOL;
    }

    public function setInputChannel(): void
    {
        echo "TV set input channle: 123" . PHP_EOL;
    }

    public function setVolume(): void
    {
        echo "TV set volume: 123" . PHP_EOL;
    }
}
