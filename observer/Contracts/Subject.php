<?php

namespace Observer\Contracts;

interface Subject
{
    /**
     * Register new observer
     *
     * @param  Observer $observer
     * @return void
     */
    public function registerObserver(Observer $observer) : void;

    /**
     * Remove observer
     *
     * @param  Observer $observer
     * @return void
     */
    public function removeObserver(Observer $observer) : void;

    /**
     * Notify observers
     *
     * @return void
     */
    public function notifyObservers() : void;
}