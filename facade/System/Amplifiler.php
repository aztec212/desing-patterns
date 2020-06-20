<?php

namespace Facade\System;

class Amplifiler
{
    /**
     * @var \Facade\System\Tuner
     */
    private Tuner $tuner;

    /**
     * @var \Facade\System\DvdPlayer
     */
    private DvdPlayer $dvdPlayer;

    /**
     * @var \Facade\System\CdPlayer
     */
    private CdPlayer $cdPlayer;

    public function on()
    {
        echo "Apmlifiler on" . PHP_EOL;
    }

    public function off()
    {
        echo "Apmlifiler off" . PHP_EOL;
    }

    public function setCd(CdPlayer $cdPlayer)
    {
        echo "Amplifiler set CD" . PHP_EOL;
        $this->cdPlayer = $cdPlayer;
    }

    public function setDvd(DvdPlayer $dvd)
    {
        echo "Amplifiler set DVD" . PHP_EOL;
        $this->dvdPlayer = $dvd;
    }

    public function setStereoSound()
    {
        echo "Amplifiler set stereo sound" . PHP_EOL;
    }

    public function setSurroundSound()
    {
        echo "Amplifiler set surround sound" . PHP_EOL;
    }

    public function setTuner(Tuner $tuner)
    {
        echo "Amplifiler set tuner" . PHP_EOL;
        $this->tuner = $tuner;
    }

    public function setVolume(int $vol)
    {
        echo "Amplifiler set vol: " . $vol . PHP_EOL;
    }
}
