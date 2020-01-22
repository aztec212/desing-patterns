<?php

namespace Strategy\Behaviors\Fly;

use Strategy\Contracts\FlyBehaviorContract;

class FlyRocketPowered implements FlyBehaviorContract
{
    public function fly()
    {
        echo "I'm flying with a rocket!\r\n";
    }
}
