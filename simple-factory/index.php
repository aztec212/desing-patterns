<?php

require __DIR__ . '/../vendor/autoload.php';

use SimpleFactory\PizzaStore;
use SimpleFactory\SimplePizzaFactory;

$pizzaStore = new PizzaStore(new SimplePizzaFactory());
$pizza = $pizzaStore->orderPizza('pepperoni');
