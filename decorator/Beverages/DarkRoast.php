<?php

namespace Decorator\Beverages;

use Decorator\Starbuzz\Beverage;

class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->desctiption = 'Dark Roast Coffee';
    }

    public function cost() : float
    {
        return .82;
    }

    public function getDescription() : string
    {
        return $this->desctiption;
    }
}