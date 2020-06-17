<?php

namespace Command\Devices;

class ApplianceControl
{
    public function on(): void
    {
        echo "Appliance control on" . PHP_EOL;
    }

    public function off(): void
    {
        echo "Appliance control off" . PHP_EOL;
    }
}
