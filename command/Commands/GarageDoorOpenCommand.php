<?php

namespace Command\Commands;

use Command\Contracts\CommandContract;
use Command\Devices\GarageDoor;

class GarageDoorOpenCommand implements CommandContract
{
    /**
     * @var \Command\Devices\GarageDoor
     */
    protected GarageDoor $door;

    public function __construct(GarageDoor $door)
    {
        $this->door = $door;
    }

    public function execute(): void
    {
        $this->door->up();
    }

    public function undo(): void
    {
        $this->door->down();
    }
}
