<?php

namespace Command\Commands;

use Command\Contracts\CommandContract;
use Command\Devices\Stereo;

class StereoOffCommand implements CommandContract
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
        $this->stereo->off();
    }

    public function undo(): void
    {
        $this->stereo->on();
    }
}
