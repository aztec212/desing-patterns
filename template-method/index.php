<?php

use TemplateMethod\Coffee;
use TemplateMethod\Tea;

require __DIR__ . '/../vendor/autoload.php';

$coffee = new Coffee();
$coffee->prepareRecipe();

$tea = new Tea();
$tea->prepareRecipe();
