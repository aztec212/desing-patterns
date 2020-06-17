<?php

namespace Command\Commands;

use Command\Contracts\CommandContract;
use Command\Devices\Light;

class LightOffCommand implements CommandContract
{
    /**
     * @var \Command\Devices\Light
     */
    protected Light $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->off();
    }

    public function undo(): void
    {
        $this->light->on();
    }
}
