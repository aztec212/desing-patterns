<?php

namespace Facade\System;

class DvdPlayer
{
    public function on()
    {
        echo "DVDPlayer on" . PHP_EOL;
    }

    public function off()
    {
        echo "DVDPlayer off" . PHP_EOL;
    }

    public function eject()
    {
        echo "DVDPlayer eject" . PHP_EOL;
    }

    public function pause()
    {
        echo "DVDPlayer pause" . PHP_EOL;
    }

    public function play()
    {
        echo "DVDPlayer play" . PHP_EOL;
    }

    public function stop()
    {
        echo "DVDPlayer stop" . PHP_EOL;
    }

    public function setSurroundAudio()
    {
        echo "DVDPlayer set Surround Audio" . PHP_EOL;
    }

    public function setTwoChannelAudio()
    {
        echo "DVDPlayer set Two Channel Audio" . PHP_EOL;
    }
}
