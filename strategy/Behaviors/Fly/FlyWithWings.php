<?php

namespace Strategy\Behaviors\Fly;

use Strategy\Contracts\FlyBehaviorContract;

class FlyWithWings implements FlyBehaviorContract
{
    public function fly()
    {
        // реализация полета
        echo "I'm flying!!\r\n";
    }
}
