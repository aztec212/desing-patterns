<?php

namespace Strategy\Behaviors\Quack;

use Strategy\Contracts\QuackBehaviorContract;

class Quack implements QuackBehaviorContract
{
    public function quack() : void
    {
        echo "Quack" . PHP_EOL;
    }
}
