<?php

namespace FactoryMethod\Stores\Chicago;

use Exception;
use FactoryMethod\Stores\Chicago\Pizza\ChicagoStyleCheesePizza;
use FactoryMethod\Stores\Chicago\Pizza\ChicagoStyleClamPizza;
use FactoryMethod\Stores\Chicago\Pizza\ChicagoStyleVeggiePizza;
use FactoryMethod\Stores\Pizza;
use FactoryMethod\Stores\PizzaStore;

class ChicagoStylePizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'cheese':
                return new ChicagoStyleCheesePizza();
            case 'clam':
                return new ChicagoStyleClamPizza();
            case 'pepperoni':
                return new ChicagoStyleClamPizza();
            case 'veggie':
                return new ChicagoStyleVeggiePizza();
            default:
                throw new Exception('unknown pizza type');
        }
    }
}
