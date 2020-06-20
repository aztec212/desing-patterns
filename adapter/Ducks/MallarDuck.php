<?php

namespace Adapter\Ducks;

use Adapter\Contracts\DuckContract;

class MallarDuck implements DuckContract
{
    public function quack(): void
    {
        echo "Quack" . PHP_EOL;
    }

    public function fly(): void
    {
        echo "I'm flying" . PHP_EOL;
    }
}
