<?php

namespace Strategy\Behaviors\Fly;

use Strategy\Contracts\FlyBehaviorContract;

class FlyNoWay implements FlyBehaviorContract
{
    public function fly() : void
    {
        echo "I can't fly" . PHP_EOL;
    }
}
