<?php

namespace Strategy\Behaviors\Quack;

use Strategy\Contracts\QuackBehaviorContract;

class Quack implements QuackBehaviorContract
{
    public function quack()
    {
        // Кряканье
        echo "Quack\r\n";
    }
}
