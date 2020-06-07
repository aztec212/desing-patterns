<?php

namespace SimpleFactory\Pizza;

use SimpleFactory\Contracts\PizzaContract;

class VeggiePizza implements PizzaContract
{
    public function prepare()
    {
        echo 'prepare' . PHP_EOL;
    }

    public function bake()
    {
        echo 'bake' . PHP_EOL;
    }

    public function cut()
    {
        echo 'cut' . PHP_EOL;
    }

    public function box()
    {
        echo 'box' . PHP_EOL;
    }
}
