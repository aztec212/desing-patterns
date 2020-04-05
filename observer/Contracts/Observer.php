<?php

namespace Observer\Contracts;

interface Observer
{
    /**
     * @param  Subject $subject
     * @param  array|null $data
     * @return void
     */
    public function update(Subject $subject, array $data = null): void;

    /**
     * Unsubscribe observer
     *
     * @param  Observer $obs
     * @return void
     */
    public function unsubscribe(Observer $obs): void;
}
