<?php

require __DIR__ . '/../vendor/autoload.php';

use Adapter\Contracts\DuckContract;
use Adapter\Contracts\TurkeyContract;
use Adapter\DuckAdapter;
use Adapter\Ducks\MallarDuck;
use Adapter\TurkeyAdapter;
use Adapter\Turkeys\WildTurkey;

function testDuck(DuckContract $duck)
{
    $duck->quack();
    $duck->fly();
}

function testTurkey(TurkeyContract $turkey)
{
    $turkey->gobble();
    $turkey->fly();
}

$turkey = new WildTurkey();
$duckibleTurkey = new TurkeyAdapter($turkey);
testDuck($duckibleTurkey);

$duck = new MallarDuck();
$turkeybleDuck = new DuckAdapter($duck);
testTurkey($turkeybleDuck);
