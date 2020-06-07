<?php

namespace AbstractFactory\Pizzas;

use AbstractFactory\Contracts\PizzaIngredientFactory;

class ClamPizza extends Pizza
{
    /**
     * @var \AbstractFactory\Contracts\PizzaIngredientFactory
     */
    protected PizzaIngredientFactory $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare(): void
    {
        echo "Preparing " . $this->name . PHP_EOL;
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->clam = $this->ingredientFactory->createClam();
    }
}
