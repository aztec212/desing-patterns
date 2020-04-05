<?php
namespace Observer;

use Observer\Contracts\Observer;
use Observer\Contracts\Subject;

class WeatherData implements Subject
{
    /**
     * @var array $observer
     */
    private array $observers;

    /**
     * @var float $temperature
     */
    private float $temperature;

    /**
     * @var float $humidity
     */
    private float $humidity;

    /**
     * Create a new WeatherData instance
     *
     * @return void
     */
    public function __construct()
    {
        $this->observers = [];
    }

    /**
     * Register new observer
     *
     * @param  Observer $obs
     * @return void
     */
    public function registerObserver(Observer $obs) : void
    {
        array_push($this->observers, $obs);
    }

    /**
     * Remove observer
     *
     * @param  Observer $obs
     * @return void
     */
    public function removeObserver(Observer $obs) : void
    {
        $target = array_search($obs, $this->observers);
        
        if ($target !== false) {
            unset($this->observers[$target]);
        }
    }

    /**
     * Notify all observers
     *
     * @return void
     */
    public function notifyObservers() : void
    {
        /**
         * @var Observer $observer
         */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Measurements changes
     *
     * @return void
     */
    public function measurementsChanges()
    {
        $this->notifyObservers();
    }

    /**
     * Set new measurements
     *
     * @param  float $temperature
     * @param  float $humidity
     * @return void
     */
    public function setMeasurements(float $temperature, float $humidity) : void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->measurementsChanges();
    }

    /**
     * Return current temperature
     *
     * @return float
     */
    public function getTemperature() : float
    {
        return $this->temperature;
    }

    /**
     * Return current humidity
     *
     * @return float
     */
    public function getHumidity() : float
    {
        return $this->humidity;
    }
}