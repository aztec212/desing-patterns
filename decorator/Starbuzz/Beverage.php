<?php

namespace Decorator\Starbuzz;

abstract class Beverage
{
    const TALL = 1;
    const GRANDE = 2;
    const VENTI = 3;

    /**
     * @var string $desctiption
     */
    protected string $desctiption = 'Unknown Beverage';

    /**
     * @var string $size
     */
    protected int $size = self::TALL;

    // в книге едет обьявление обычного метода, а в субклассе (CondimentDecorator) переопределение его в абстрактный,
    // но ООП пыхи пока в такое не могет, так что обьявляем getDescription() так же абстрактным
    // public function getDescription() : string
    // {
    //     return $this->desctiption;
    // }

    /**
     * Return beverage description
     *
     * @return string
     */
    public abstract function getDescription() : string;

    /**
     * Set beverage size
     *
     * @param  mixed $size
     * @return void
     */
    public function setSize(int $size) : void
    {
        $this->size = $size;
    }

    /**
     * Get beverage size
     *
     * @return int
     */
    public function getSize() : int
    {
        return $this->size;
    }

    /**
     * Return beverage cost
     *
     * @return float
     */
    public abstract function cost() : float;
}