<?php

namespace Command\Commands;

use Command\Contracts\CommandContract;
use Command\Devices\CeilingFan;

class CeilingFanOffCommand implements CommandContract
{
    protected CeilingFan $fan;
    protected int $prevSpeed;

    public function __construct(CeilingFan $fan)
    {
        $this->fan = $fan;
    }

    public function execute(): void
    {
        $this->prevSpeed = $this->fan->getSpeed();
        $this->fan->off();
    }

    public function undo(): void
    {
        switch ($this->prevSpeed) {
            case CeilingFan::HIGH:
                $this->fan->high();
                break;
            case CeilingFan::MEDIUM:
                $this->fan->medium();
                break;
            case CeilingFan::LOW:
                $this->fan->low();
                break;
            case CeilingFan::OFF:
                $this->fan->off();
                break;
        }
    }
}
