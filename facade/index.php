<?php

require __DIR__ . '/../vendor/autoload.php';

use Facade\HomeTheatreFacade;
use Facade\System\Amplifiler;
use Facade\System\CdPlayer;
use Facade\System\DvdPlayer;
use Facade\System\PopcornPopper;
use Facade\System\Projector;
use Facade\System\Screen;
use Facade\System\TheaterLights;
use Facade\System\Tuner;


$homeTheater = new HomeTheatreFacade(
    new Amplifiler(),
    new Tuner(),
    new DvdPlayer(),
    new CdPlayer,
    new Projector(),
    new TheaterLights(),
    new Screen(),
    new PopcornPopper()
);

$homeTheater->watchMovie('hackers');
$homeTheater->endMovie();
