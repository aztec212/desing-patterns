<?php

use AbstractFactory\Stores\ChicagoPizzaStore;
use AbstractFactory\Stores\NYPizzaStore;

require __DIR__ . '/../../vendor/autoload.php';

$pizzasTypes = ["cheese", "pepperoni", "veggie", "clam"];

$nyPizzaStore = new NYPizzaStore();

foreach ($pizzasTypes as $type) {
    $pizza = $nyPizzaStore->orderPizza($type);
    echo $pizza->getName() . PHP_EOL;
    echo "-----------------------------" . PHP_EOL;
}

$chicagoPizzaStore = new ChicagoPizzaStore();

foreach ($pizzasTypes as $type) {
    $pizza = $chicagoPizzaStore->orderPizza($type);
    echo $pizza->getName() . PHP_EOL;
    echo "-----------------------------" . PHP_EOL;
}
