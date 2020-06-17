<?php

namespace Command\Devices;

class FausetControl
{
    public function openValue(): void
    {
        echo "Fauset control open value" . PHP_EOL;
    }

    public function closeValue(): void
    {
        echo "Fauset control close value" . PHP_EOL;
    }
}
