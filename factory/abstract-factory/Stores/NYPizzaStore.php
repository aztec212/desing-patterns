<?php

namespace AbstractFactory\Stores;

use AbstractFactory\Factories\NYPizzaIngradientFactory;
use AbstractFactory\Pizzas\CheesePizza;
use AbstractFactory\Pizzas\ClamPizza;
use AbstractFactory\Pizzas\PepperoniPizza;
use AbstractFactory\Pizzas\Pizza;
use AbstractFactory\Pizzas\VeggiePizza;
use Exception;

class NYPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        $ingredientFactory = new NYPizzaIngradientFactory();

        switch ($type) {
            case "cheese":
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName("New York Style Cheese Pizza");
                return $pizza;
            case "veggie":
                $pizza = new VeggiePizza($ingredientFactory);
                $pizza->setName("New York Style Veggie Pizza");
                return $pizza;
            case "clam":
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->setName("New York Style Clam Pizza");
                return $pizza;
            case "pepperoni":
                $pizza = new PepperoniPizza($ingredientFactory);
                $pizza->setName("New York Style Clam Pizza");
                return $pizza;
            default:
                throw new Exception("unknown pizza type");
        }
    }
}
