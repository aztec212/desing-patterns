<?php

use Singleton\Singleton;

require __DIR__ . '/../vendor/autoload.php';

$first = Singleton::getInstance();
$second = Singleton::getInstance();

var_dump($first === $second) . PHP_EOL;
