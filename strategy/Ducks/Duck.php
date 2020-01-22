<?php

namespace Strategy\Ducks;

use Strategy\Contracts\FlyBehaviorContract;
use Strategy\Contracts\QuackBehaviorContract;

abstract class Duck
{
    protected QuackBehaviorContract $quackBehavior;
    protected FlyBehaviorContract $flyBehavior;

    abstract public function display();

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function setFlyBehavior(FlyBehaviorContract $fb)
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehaviorContract $qb)
    {
        $this->quackBehavior = $qb;
    }

    public function swim()
    {
        echo "All ducks float, even decoys!\r\n";
    }
}
