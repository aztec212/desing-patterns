<?php

namespace Command\Controls;

use Command\Commands\NoCommand;
use Command\Contracts\CommandContract;

class RemoteControl
{
    private array $onCommands;
    private array $offCommands;

    /**
     * @var \Command\Contracts\CommandContract
     */
    private CommandContract $undoCommand;

    public function __construct()
    {
        $this->onCommands = [];
        $this->offCommands = [];

        $noCommand = new NoCommand();
        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = $this->offCommands[$i] = $noCommand;
        }

        $this->undoCommand = $noCommand;
    }

    public function setCommand(int $slot, CommandContract $onCommand, CommandContract $offCommand): void
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot): void
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonWasPushed(int $slot): void
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoButtonWasPushed(): void
    {
        $this->undoCommand->undo();
    }

    function printControls(): void
    {
        var_dump($this->onCommands);
        echo PHP_EOL;
        var_dump($this->offCommands);
    }
}
