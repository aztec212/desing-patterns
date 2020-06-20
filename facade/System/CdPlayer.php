<?php

namespace Facade\System;

class CdPlayer
{
    public function on()
    {
        echo "CDPlayer on" . PHP_EOL;
    }

    public function off()
    {
        echo "CDPlayer off" . PHP_EOL;
    }

    public function eject()
    {
        echo "CDPlayer eject" . PHP_EOL;
    }

    public function pause()
    {
        echo "CDPlayer pause" . PHP_EOL;
    }

    public function play()
    {
        echo "CDPlayer play" . PHP_EOL;
    }

    public function stop()
    {
        echo "CDPlayer stop" . PHP_EOL;
    }
}
