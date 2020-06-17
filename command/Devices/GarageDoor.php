<?php

namespace Command\Devices;

class GarageDoor
{
    public function up(): void
    {
        echo "Garage door up" . PHP_EOL;
    }

    public function down(): void
    {
        echo "Garage door down" . PHP_EOL;
    }

    public function stop(): void
    {
        echo "Garage door stop" . PHP_EOL;
    }

    public function lightOn(): void
    {
        echo "Garage door: light on" . PHP_EOL;
    }

    public function lightOff(): void
    {
        echo "Garage door: light off" . PHP_EOL;
    }
}
