<?php

namespace Facade\System;

class Tuner
{
    public function on()
    {
        echo "Tuner on" . PHP_EOL;
    }

    public function off()
    {
        echo "Tuner off" . PHP_EOL;
    }

    public function setAm()
    {
        echo "Tuner set AM" . PHP_EOL;
    }

    public function setFm()
    {
        echo "Tuner set FM" . PHP_EOL;
    }

    public function setFrequency()
    {
        echo "Tuner set frequency" . PHP_EOL;
    }
}
