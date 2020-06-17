<?php

namespace Command\Controls;

use Command\Contracts\CommandContract;

class SimpleRemoteControl
{
    protected CommandContract $slot;

    public function setCommand(CommandContract $command)
    {
        $this->slot = $command;
    }

    public function buttonWasPressed()
    {
        $this->slot->execute();
    }
}
