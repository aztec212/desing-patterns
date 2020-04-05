<?php

namespace Strategy\Behaviors\Fly;

use Strategy\Contracts\FlyBehaviorContract;

class FlyWithWings implements FlyBehaviorContract
{
    public function fly() : void
    {
        // реализация полета
        echo "I'm flying!!" . PHP_EOL;
    }
}
