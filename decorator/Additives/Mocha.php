<?php

namespace Decorator\Additives;

use Decorator\Starbuzz\Beverage;
use Decorator\Starbuzz\CondimentDecorator;

class Mocha extends CondimentDecorator
{
    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription() : string
    {
        return $this->beverage->getDescription() . ', Mocha';
    }

    public function cost() : float
    {
        return .20 + $this->beverage->cost();
    }
}