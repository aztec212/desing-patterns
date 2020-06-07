<?php

require __DIR__ . '/../vendor/autoload.php';

use FactoryMethod\Stores\Chicago\ChicagoStylePizzaStore;
use FactoryMethod\Stores\NY\NYStylePizzaStore;

$nyPizzaStore = new NYStylePizzaStore();
$chicagoPizzaStore = new ChicagoStylePizzaStore();

$pizza = $nyPizzaStore->orderPizza('cheese');
echo 'Ethan ordered a ' . $pizza->getName() . PHP_EOL;

$pizza = $chicagoPizzaStore->orderPizza('cheese');
echo 'Joel ordered a ' . $pizza->getName() . PHP_EOL;
