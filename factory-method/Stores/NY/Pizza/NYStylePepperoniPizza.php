<?php

namespace FactoryMethod\Stores\NY\Pizza;

use FactoryMethod\Stores\Pizza;

class NYStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'NY Style Sauce and Pepperoni Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';
        array_push($this->toppings, "Grated Reggiano Cheese");
    }
}
