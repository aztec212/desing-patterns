<?php

namespace Strategy\Ducks;

use Strategy\Behaviors\Fly\FlyWithWings;
use Strategy\Behaviors\Quack\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        return null;
    }
}
