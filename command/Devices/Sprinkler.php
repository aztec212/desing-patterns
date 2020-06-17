<?php

namespace Command\Devices;

class Sprinkler
{
    public function waterOn(): void
    {
        echo "Sprinkler is on" . PHP_EOL;
    }

    public function waterOff(): void
    {
        echo "Sprinkler is off" . PHP_EOL;
    }
}
