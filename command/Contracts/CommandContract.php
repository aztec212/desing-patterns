<?php

namespace Command\Contracts;

interface CommandContract
{
    public function execute(): void;
    public function undo(): void;
}
