<?php

use Observer\Displays\CurrentConditionsDisplay;
use Observer\Displays\StatisticDisplay;
use Observer\WeatherData;

require __DIR__ . '/../vendor/autoload.php';

$weatherData = new WeatherData();
$currentDispaly = new CurrentConditionsDisplay($weatherData);
$statisticDisplay = new StatisticDisplay($weatherData);

$weatherData->setMeasurements(28, 64);
$weatherData->setMeasurements(23, 70);
// $currentDispaly->unsubscribe();
$weatherData->setMeasurements(18, 90);