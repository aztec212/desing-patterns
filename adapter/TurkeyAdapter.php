<?php

namespace Adapter;

use Adapter\Contracts\DuckContract;
use Adapter\Contracts\TurkeyContract;

class TurkeyAdapter implements DuckContract
{
    /**
     * @var \Adapter\Contracts\TurkeyContract
     */
    protected TurkeyContract $turkey;

    public function __construct(TurkeyContract $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack(): void
    {
        $this->turkey->gobble();
    }

    public function fly(): void
    {
        $this->turkey->fly();
    }
}
