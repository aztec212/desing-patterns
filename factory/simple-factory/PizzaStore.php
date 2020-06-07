<?php

namespace SimpleFactory;

use SimpleFactory\Contracts\PizzaContract;

class PizzaStore
{
    protected SimplePizzaFactory $factory;

    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    public function orderPizza(string $type): PizzaContract
    {
        $pizza = $this->factory->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }
}
