<?php

namespace Decorator\Additives;

use Decorator\Starbuzz\Beverage;
use Decorator\Starbuzz\CondimentDecorator;

class Soy extends CondimentDecorator
{
    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription() : string
    {
        return $this->beverage->getDescription() . ', Soy';
    }

    public function cost() : float
    {
        $cost = $this->beverage->cost();

        if ($this->beverage->getSize() === Beverage::TALL) {
            $cost += .10;
        } else if ($this->beverage->getSize() === Beverage::GRANDE) {
            $cost += .15;
        } else if ($this->beverage->getSize() === Beverage::VENTI) {
            $cost += .20;
        }

        return $cost;
    }
}