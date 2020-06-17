<?php

namespace Command\Devices;

class Hottub
{
    public function circulate(): void
    {
        echo "Hottub circulate" . PHP_EOL;
    }

    public function jetsOn(): void
    {
        echo "Hottub jets on" . PHP_EOL;
    }

    public function jetsOff(): void
    {
        echo "Hottub jets off" . PHP_EOL;
    }

    public function setTemperaturet(): void
    {
        echo "Hottub set temperaturet" . PHP_EOL;
    }
}
