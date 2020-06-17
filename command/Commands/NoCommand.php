<?php

namespace Command\Commands;

use Command\Contracts\CommandContract;

class NoCommand implements CommandContract
{
    public function execute(): void
    {
        echo "No command set" . PHP_EOL;
    }

    public function undo(): void
    {
        echo "No command set" . PHP_EOL;
    }
}
