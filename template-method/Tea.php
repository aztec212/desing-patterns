<?php

namespace TemplateMethod;

class Tea extends CaffeineBeverage
{
    public function brew(): void
    {
        echo "Steeping the tea" . PHP_EOL;
    }

    public function addCondiments(): void
    {
        echo "Adding leamon" . PHP_EOL;
    }
}
