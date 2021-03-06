<?php

require __DIR__ . '/../vendor/autoload.php';

use Decorator\Additives\Mocha;
use Decorator\Additives\Soy;
use Decorator\Additives\Whip;
use Decorator\Beverages\DarkRoast;
use Decorator\Beverages\Espresso;
use Decorator\Beverages\HouseBlend;

$beverage = new Espresso();
echo $beverage->getDescription() . ' $' . $beverage->cost() . PHP_EOL;

$beverage2 = new DarkRoast();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);
echo $beverage2->getDescription() . ' $' . $beverage2->cost() . PHP_EOL;

$beverage3 = new HouseBlend();
$beverage3 = new Soy($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Whip($beverage3);
echo $beverage3->getDescription() . ' $' . $beverage3->cost() . PHP_EOL;
