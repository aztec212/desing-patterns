<?php

namespace FactoryMethod\Stores;

abstract class Pizza
{
    /**
     * @var string
     */

    protected string $name;
    /**
     * @var string
     */
    protected string $dough;

    /**
     * @var string
     */
    protected string $sauce;

    /**
     * @var array
     */
    protected array $toppings = [];

    public function prepare(): void
    {
        echo 'Preparing ' . $this->name . PHP_EOL;
        echo 'Tossing dough...' . PHP_EOL;
        echo 'Adding sauce...' . PHP_EOL;

        if (count($this->toppings) > 0) {
            echo 'Adding toppings:' . PHP_EOL;
            foreach ($this->toppings as $toping) {
                echo "    " . $toping . PHP_EOL;
            }
        }
    }

    public function bake(): void
    {
        echo 'Bake for 25 minutes at 350' . PHP_EOL;
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into diagonal slices' . PHP_EOL;
    }

    public function box()
    {
        echo 'Place pizza in official PizzaStore Box' . PHP_EOL;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
