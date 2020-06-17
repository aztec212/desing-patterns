<?php

namespace Command\Devices;

class Stereo
{
    protected int $volume;

    public function on(): void
    {
        echo "Stereo on" . PHP_EOL;
    }

    public function off(): void
    {
        echo "Stereo off" . PHP_EOL;
    }

    public function setCD(): void
    {
        echo "Stereo set cd" . PHP_EOL;
    }

    public function setDVD(): void
    {
        echo "Stereo set dvd" . PHP_EOL;
    }

    public function setRadio(): void
    {
        echo "Stereo set radio" . PHP_EOL;
    }

    public function setVolume(int $vol): void
    {
        $this->volume = $vol;
        echo "Stereo set volume: " . $vol . PHP_EOL;
    }
}
