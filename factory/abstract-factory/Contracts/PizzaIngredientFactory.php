<?php

namespace AbstractFactory\Contracts;

use AbstractFactory\Contracts\Ingredients\Clam;
use AbstractFactory\Contracts\Ingredients\Cheese;
use AbstractFactory\Contracts\Ingredients\Dough;
use AbstractFactory\Contracts\Ingredients\Pepperoni;
use AbstractFactory\Contracts\Ingredients\Sauce;

interface PizzaIngredientFactory
{
    public function createDough(): Dough;
    public function createSauce(): Sauce;
    public function createCheese(): Cheese;
    public function createPepperoni(): Pepperoni;
    public function createClam(): Clam;

    /**
     * В пхп еще не завезли типизированные массивы
     * @return []Veggies
     */
    public function createVeggies(): array;
}
