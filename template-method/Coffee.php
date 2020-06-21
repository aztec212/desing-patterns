<?php

namespace TemplateMethod;

class Coffee extends CaffeineBeverage
{
    public function brew(): void
    {
        echo "Dripping Coffee through filter" . PHP_EOL;
    }

    public function addCondiments(): void
    {
        echo "Adding Sugar and Milk" . PHP_EOL;
    }

    public function wantsCondiment(): bool
    {
        $answer = $this->getUserInput();
        if (strtolower(substr($answer, 0, 1)) === 'y') {
            return true;
        }
        return false;
    }

    private function getUserInput(): string
    {
        echo "Would you like milk and sugar with your coffee (y/n)?" . PHP_EOL;
        $stdin = fopen('php://stdin', 'r');
        $answer = trim(fgets($stdin));
        return $answer;
    }
}
