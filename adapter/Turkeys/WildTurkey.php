<?php

namespace Adapter\Turkeys;

use Adapter\Contracts\TurkeyContract;

class WildTurkey implements TurkeyContract
{
    public function gobble(): void
    {
        echo "Gobble gobble" . PHP_EOL;
    }

    public function fly(): void
    {
        echo "I'm flying a short distance" . PHP_EOL;
    }
}
