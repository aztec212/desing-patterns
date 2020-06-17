<?php

namespace Command\Commands;

use Command\Contracts\CommandContract;
use Command\Devices\Stereo;

class StereoOnWithCDCommand implements CommandContract
{
    /**
     * @var \Command\Devices\Stereo
     */
    protected Stereo $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->on();
        $this->stereo->setCD();
        $this->stereo->setVolume(11);
    }

    public function undo(): void
    {
        $this->stereo->off();
    }
}
