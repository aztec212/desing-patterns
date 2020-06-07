<?php

namespace FactoryMethod\Stores\Chicago\Pizza;

use FactoryMethod\Stores\Pizza;

class ChicagoStyleClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago Style Deep Dish Cheese Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Marinara Sauce';
        array_push($this->toppings, "Shredded Mozzarella Cheese");
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into square slices' . PHP_EOL;
    }
}
