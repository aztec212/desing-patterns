<?php

namespace Strategy\Behaviors\Quack;

use Strategy\Contracts\QuackBehaviorContract;

class Squeak implements QuackBehaviorContract
{
    public function quack() : void
    {
        echo "Squeak" . PHP_EOL;
    }
}
