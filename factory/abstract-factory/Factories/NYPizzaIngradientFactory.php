<?php

namespace AbstractFactory\Factories;

use AbstractFactory\Contracts\Ingredients\Clam;
use AbstractFactory\Contracts\Ingredients\Cheese;
use AbstractFactory\Contracts\Ingredients\Dough;
use AbstractFactory\Contracts\Ingredients\Pepperoni;
use AbstractFactory\Contracts\Ingredients\Sauce;
use AbstractFactory\Contracts\PizzaIngredientFactory;
use AbstractFactory\Ingredients\FreshClams;
use AbstractFactory\Ingredients\Garlic;
use AbstractFactory\Ingredients\MarinaraSauce;
use AbstractFactory\Ingredients\Mushroom;
use AbstractFactory\Ingredients\Onion;
use AbstractFactory\Ingredients\RedPapper;
use AbstractFactory\Ingredients\ReggianoCheese;
use AbstractFactory\Ingredients\SlicedPepperoni;
use AbstractFactory\Ingredients\ThinCrustDough;

class NYPizzaIngradientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        return [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPapper(),
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clam
    {
        return new FreshClams();
    }
}
