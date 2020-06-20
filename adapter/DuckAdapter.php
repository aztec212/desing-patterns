<?php

namespace Adapter;

use Adapter\Contracts\DuckContract;
use Adapter\Contracts\TurkeyContract;

class DuckAdapter implements TurkeyContract
{
    /**
     * @var \Adapter\Contracts\DuckContract
     */
    protected DuckContract $duck;

    public function __construct(DuckContract $duck)
    {
        $this->duck = $duck;
    }

    public function gobble(): void
    {
        $this->duck->quack();
    }

    public function fly(): void
    {
        $this->duck->fly();
    }
}
