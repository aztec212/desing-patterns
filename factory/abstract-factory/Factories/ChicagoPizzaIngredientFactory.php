<?php

namespace AbstractFactory\Factories;

use AbstractFactory\Contracts\Ingredients\Cheese;
use AbstractFactory\Contracts\Ingredients\Clam;
use AbstractFactory\Contracts\Ingredients\Dough;
use AbstractFactory\Contracts\Ingredients\Pepperoni;
use AbstractFactory\Contracts\Ingredients\Sauce;
use AbstractFactory\Contracts\PizzaIngredientFactory;
use AbstractFactory\Ingredients\BlackOlives;
use AbstractFactory\Ingredients\Eggplant;
use AbstractFactory\Ingredients\FrozenClams;
use AbstractFactory\Ingredients\MozzarellaCheese;
use AbstractFactory\Ingredients\PlumTomatoSauce;
use AbstractFactory\Ingredients\SlicedPepperoni;
use AbstractFactory\Ingredients\Spinach;
use AbstractFactory\Ingredients\ThickCrustDough;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
    }

    public function createVeggies(): array
    {
        return [
            new BlackOlives(),
            new Spinach(),
            new Eggplant(),
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clam
    {
        return new FrozenClams();
    }
}
