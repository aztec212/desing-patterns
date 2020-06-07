<?php

namespace SimpleFactory\Contracts;

interface PizzaContract
{
    public function prepare();
    public function bake();
    public function cut();
    public function box();
}
