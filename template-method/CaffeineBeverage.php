<?php

namespace TemplateMethod;

abstract class CaffeineBeverage
{
    /**
     * Template Method
     */
    final public function prepareRecipe(): void
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if ($this->wantsCondiment()) {
            $this->addCondiments();
        }
    }

    abstract function brew(): void;
    abstract function addCondiments(): void;

    public function boilWater(): void
    {
        echo "Boiling water" . PHP_EOL;
    }

    public function pourInCup(): void
    {
        echo "Pouring into cup" . PHP_EOL;
    }

    public function wantsCondiment(): bool
    {
        return true;
    }
}
