<?php

namespace Strategy\Behaviors\Fly;

use Strategy\Contracts\FlyBehaviorContract;

class FlyNoWay implements FlyBehaviorContract
{
    public function fly()
    {
        // нелетабельный
        echo "I can't fly\r\n";
    }
}
