<?php

namespace Observer\Displays;

use Observer\Contracts\DisplayElement;
use Observer\Contracts\Observer;
use Observer\Contracts\Subject;
use Observer\WeatherData;

class StatisticDisplay implements Observer, DisplayElement
{
    /**
     * @var float $min
     */
    private float $min;

    /**
     * @var float $max
     */
    private float $max;

    /**
     * @var float $avg
     */
    private float $avg;

    /**
     * @var array $measurements
     */
    private array $measurements;

    /**
     * @var Subject $weatherData
     */
    private Subject $weatherData;

    /**
     * Create a net StatisticDisplay instance
     *
     * @param  Subject $weatherData
     * @return void
     */
    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
        $this->measurements = [];
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
                array_push($this->measurements, $subject->getTemperature());
            } else {
                array_push($this->measurements, $data['temperatur']);
            }
            $this->calculate();
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
        echo "Avg/Max/Min temperature = {$this->avg}/{$this->max}/{$this->min}" . PHP_EOL;
    }
    
    /**
     * Calculate new data
     *
     * @return void
     */
    private function calculate() : void
    {
        $this->min = min($this->measurements);
        $this->max = max($this->measurements);
        $this->avg = array_sum($this->measurements) / count($this->measurements);
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