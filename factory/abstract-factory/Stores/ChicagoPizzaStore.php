<?php

namespace AbstractFactory\Stores;

use AbstractFactory\Factories\ChicagoPizzaIngredientFactory;
use AbstractFactory\Pizzas\CheesePizza;
use AbstractFactory\Pizzas\ClamPizza;
use AbstractFactory\Pizzas\PepperoniPizza;
use AbstractFactory\Pizzas\Pizza;
use AbstractFactory\Pizzas\VeggiePizza;
use Exception;

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        $ingredientFactory = new ChicagoPizzaIngredientFactory();

        switch ($type) {
            case "cheese":
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName("Chicago Style Cheese Pizza");
                return $pizza;
            case "veggie":
                $pizza = new VeggiePizza($ingredientFactory);
                $pizza->setName("Chicago Style Veggie Pizza");
                return $pizza;
            case "clam":
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->setName("Chicago Style Clam Pizza");
                return $pizza;
            case "pepperoni":
                $pizza = new PepperoniPizza($ingredientFactory);
                $pizza->setName("Chicago Style Clam Pizza");
                return $pizza;
            default:
                throw new Exception("unknown pizza type");
        }
    }
}
