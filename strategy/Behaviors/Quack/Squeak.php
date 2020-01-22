<?php

namespace Strategy\Behaviors\Quack;

use Strategy\Contracts\QuackBehaviorContract;

class Squeak implements QuackBehaviorContract
{
    public function quack()
    {
        // Резиновые утки пищат
        echo "Squeak\r\n";
    }
}
