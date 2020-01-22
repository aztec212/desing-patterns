<?php

namespace Strategy\Behaviors\Quack;

use Strategy\Contracts\QuackBehaviorContract;

class MuteQuack implements QuackBehaviorContract
{
    public function quack()
    {
        // Неквакабельный
        echo "<< silence >>\r\n";
    }
}
