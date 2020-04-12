<?php

namespace Decorator\Beverages;

use Decorator\Starbuzz\Beverage;

class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->desctiption = 'House Blend Coffee';
    }

    public function cost() : float
    {
        return .89;
    }

    public function getDescription() : string
    {
        return $this->desctiption;
    }
}