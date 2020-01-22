<?php

require __DIR__ . '/../vendor/autoload.php';

// use Strategy\Duck\MallardDuck;
// $duck = new MallardDuck();

use Strategy\Ducks\ModelDuck;
use Strategy\Behaviors\Fly\FlyRocketPowered;
$duck = new ModelDuck();

$duck->performFly();
$duck->performQuack();

$duck->setFlyBehavior(new FlyRocketPowered());
$duck->performFly();