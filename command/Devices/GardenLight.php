<?php

namespace Command\Devices;

class GardenLight
{
    public function setDuskTime()
    {
        echo "Garden Light seted dusk time" . PHP_EOL;
    }

    public function setDawnTime()
    {
        echo "Garden Light seted dawn time" . PHP_EOL;
    }

    public function manualOn()
    {
        echo "Garden Light manual on" . PHP_EOL;
    }

    public function manualOff()
    {
        echo "Garden Light manual off" . PHP_EOL;
    }
}
