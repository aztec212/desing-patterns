<?php

namespace Decorator\Additives;

use Decorator\Starbuzz\Beverage;
use Decorator\Starbuzz\CondimentDecorator;

class Whip extends CondimentDecorator
{
    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription() : string
    {
        return $this->beverage->getDescription() . ', Whip';
    }

    public function cost() : float
    {
        return .30 + $this->beverage->cost();
    }
}