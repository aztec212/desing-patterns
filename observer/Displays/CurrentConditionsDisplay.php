<?php

namespace Observer\Displays;

use Observer\Contracts\DisplayElement;
use Observer\Contracts\Observer;
use Observer\Contracts\Subject;
use Observer\WeatherData;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    /**
     * @var float $temperature
     */
    private float $temperature;

    /**
     * @var float $humidity
     */
    private float $humidity;

    /**
     * @var Subject $weatherData
     */
    private Subject $weatherData;

    
    /**
     * Create a new CurrentConditionsDisplay instance
     *
     * @param  Subject $weatherData
     * @return void
     */
    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    /**
     * Update data
     *
     * @param  Subject $subject
     * @param  array|null $data
     * @return void
     */
    public function update(Subject $subject, array $data = null) : void
    {
        if ($subject instanceof WeatherData) {
            if (empty($data)) {
                $this->temperature = $subject->getTemperature();
                $this->humidity = $subject->getHumidity();
            } else {
                $this->temperature = $data['temperature'];
                $this->humidity = $data['humidity'];
            }
            $this->display();
        }
    }

    /**
     * Display information
     *
     * @return void
     */
    public function display() : void
    {
        echo "Current conditions: {$this->temperature}C degrees and {$this->humidity}% humidity" . PHP_EOL;
    }

    /**
     * Uunsubscribe
     *
     * @return void
     */
    public function unsubscribe() : void
    {
        $this->weatherData->removeObserver($this);
    }
}