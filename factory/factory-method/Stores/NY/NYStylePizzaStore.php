<?php

namespace FactoryMethod\Stores\NY;

use Exception;
use FactoryMethod\Stores\NY\Pizza\NYStyleCheesePizza;
use FactoryMethod\Stores\NY\Pizza\NYStyleClamPizza;
use FactoryMethod\Stores\NY\Pizza\NYStyleVeggiePizza;
use FactoryMethod\Stores\Pizza;
use FactoryMethod\Stores\PizzaStore;

class NYStylePizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'cheese':
                return new NYStyleCheesePizza();
            case 'clam':
                return new NYStyleClamPizza();
            case 'pepperoni':
                return new NYStyleClamPizza();
            case 'veggie':
                return new NYStyleVeggiePizza();
            default:
                throw new Exception('unknown pizza type');
        }
    }
}
