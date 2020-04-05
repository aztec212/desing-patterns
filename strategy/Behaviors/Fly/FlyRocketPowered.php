<?php

namespace Strategy\Behaviors\Fly;

use Strategy\Contracts\FlyBehaviorContract;

class FlyRocketPowered implements FlyBehaviorContract
{
    public function fly() : void
    {
        echo "I'm flying with a rocket!" . PHP_EOL;
    }
}
