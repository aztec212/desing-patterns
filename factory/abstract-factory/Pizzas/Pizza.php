<?php

namespace AbstractFactory\Pizzas;

use AbstractFactory\Contracts\Ingredients\Clam;
use AbstractFactory\Contracts\Ingredients\Cheese;
use AbstractFactory\Contracts\Ingredients\Dough;
use AbstractFactory\Contracts\Ingredients\Pepperoni;
use AbstractFactory\Contracts\Ingredients\Sauce;

abstract class Pizza
{
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var \AbstractFactory\Contracts\Ingredients\Dough;
     */
    protected Dough $dough;

    /**
     * @var \AbstractFactory\Contracts\Ingredients\Sauce;
     */
    protected Sauce $sauce;

    /**
     * []Veggies
     * @var array
     */
    protected array $veggies = [];

    /**
     * @var \AbstractFactory\Contracts\Ingredients\Cheese;
     */
    protected Cheese $cheese;

    /**
     * @var \AbstractFactory\Contracts\Ingredients\Pepperoni;
     */
    protected Pepperoni $pepperoni;

    /**
     * @var \AbstractFactory\Contracts\Ingredients\Clam;
     */
    protected Clam $clam;

    abstract public function prepare(): void;

    public function bake()
    {
        echo "Bake for 25 minutes at 350" . PHP_EOL;
    }

    public function cut()
    {
        echo "Cutting the pizza into diagonal slices" . PHP_EOL;
    }

    public function box()
    {
        echo "Place pizza in official PizzaStore box" . PHP_EOL;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
