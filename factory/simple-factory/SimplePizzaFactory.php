<?php

namespace SimpleFactory;

use Exception;
use SimpleFactory\Contracts\PizzaContract;
use SimpleFactory\Pizza\CheesePizza;
use SimpleFactory\Pizza\ClamPizza;
use SimpleFactory\Pizza\PepperoniPizza;
use SimpleFactory\Pizza\VeggiePizza;

class SimplePizzaFactory
{
    public function createPizza(string $type): PizzaContract
    {
        switch ($type) {
            case 'cheese':
                return new CheesePizza();
            case 'clam':
                return new ClamPizza();
            case 'pepperoni':
                return new PepperoniPizza();
            case 'veggie':
                return new VeggiePizza();
            default:
                throw new Exception('unknown pizza type');
        }
    }
}
