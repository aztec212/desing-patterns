<?php

namespace AbstractFactory\Stores;

use AbstractFactory\Pizzas\Pizza;

abstract class PizzaStore
{
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }

    abstract public function createPizza(string $type): Pizza;
}
