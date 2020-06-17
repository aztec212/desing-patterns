<?php

namespace Command\Devices;

class SecurityControl
{
    public function arm(): void
    {
        echo "Secutiry control arm" . PHP_EOL;
    }

    public function disarm(): void
    {
        echo "Security control disarm" . PHP_EOL;
    }
}
