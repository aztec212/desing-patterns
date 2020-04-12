<?php

namespace Decorator\Beverages;

use Decorator\Starbuzz\Beverage;

class Decaf extends Beverage
{
    public function __construct()
    {
        $this->desctiption = 'Decaf Coffee';
    }

    public function cost() : float
    {
        return .69;
    }

    public function getDescription() : string
    {
        return $this->desctiption;
    }
}