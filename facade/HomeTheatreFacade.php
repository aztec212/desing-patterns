<?php

namespace Facade;

use Facade\System\Amplifiler;
use Facade\System\CdPlayer;
use Facade\System\DvdPlayer;
use Facade\System\PopcornPopper;
use Facade\System\Projector;
use Facade\System\Screen;
use Facade\System\TheaterLights;
use Facade\System\Tuner;

class HomeTheatreFacade
{
    private Amplifiler $amp;
    private Tuner $tuner;
    private DvdPlayer $dvd;
    private CdPlayer $cd;
    private Projector $projector;
    private TheaterLights $lights;
    private Screen $screen;
    private PopcornPopper $popper;

    public function __construct(
        Amplifiler $amp,
        Tuner $tuner,
        DvdPlayer $dvd,
        CdPlayer $cd,
        Projector $projector,
        TheaterLights $lights,
        Screen $screen,
        PopcornPopper $popper
    ) {
        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->projector = $projector;
        $this->lights = $lights;
        $this->screen = $screen;
        $this->popper = $popper;
    }

    public function watchMovie(string $movie)
    {
        echo "Get ready to watch movide..." . PHP_EOL;
        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setDvd($this->dvd);
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);
        $this->dvd->on();
        $this->dvd->play();
    }

    public function endMovie()
    {
        echo "Shutting movie theater down..." . PHP_EOL;
        $this->popper->off();
        $this->lights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amp->off();
        $this->dvd->stop();
        $this->dvd->eject();
        $this->dvd->off();
    }
}
