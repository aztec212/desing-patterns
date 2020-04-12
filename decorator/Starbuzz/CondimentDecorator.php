<?php

namespace Decorator\Starbuzz;

abstract class CondimentDecorator extends Beverage
{
    /**
     * Return decorated beverage description
     *
     * @return string
     */
    public abstract function getDescription() : string;
}