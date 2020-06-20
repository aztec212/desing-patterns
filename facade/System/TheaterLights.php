<?php

namespace Facade\System;

class TheaterLights
{
    public function on()
    {
        echo "Theater lights on" . PHP_EOL;
    }

    public function off()
    {
        echo "Theatre lights off" . PHP_EOL;
    }

    public function dim(int $dim)
    {
        echo "Theatre lights dim: " . $dim . PHP_EOL;
    }
}
