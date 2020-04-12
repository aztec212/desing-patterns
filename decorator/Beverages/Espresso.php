<?php

namespace Decorator\Beverages;

use Decorator\Starbuzz\Beverage;

class Espresso extends Beverage
{
    public function __construct()
    {
        $this->desctiption = "Espresso";
    }

    public function cost() : float
    {
        return 1.99;
    }

    public function getDescription() : string
    {
        return $this->desctiption;
    }
}
