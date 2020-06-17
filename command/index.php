<?php

require __DIR__ . '/../vendor/autoload.php';

use Command\Commands\CeilingFanHighCommand;
use Command\Commands\CeilingFanOffCommand;
use Command\Commands\GarageDoorOpenCommand;
use Command\Commands\LightOffCommand;
use Command\Commands\LightOnCommand;
use Command\Commands\MacroCommand;
use Command\Commands\StereoOffCommand;
use Command\Commands\StereoOnWithCDCommand;
use Command\Controls\RemoteControl;
use Command\Controls\SimpleRemoteControl;
use Command\Devices\CeilingFan;
use Command\Devices\GarageDoor;
use Command\Devices\Light;
use Command\Devices\Stereo;

// $controller = new SimpleRemoteControl();

// $command = new LightOnCommand(new Light());
// $controller->setCommand($command);
// $controller->buttonWasPressed();

// $command = new GarageDoorOpenCommand(new GarageDoor());
// $controller->setCommand($command);
// $controller->buttonWasPressed();

$controller = new RemoteControl();

$light = new Light();
$controller->setCommand(0, new LightOnCommand($light), new LightOffCommand($light));

$stereo = new Stereo();
$controller->setCommand(1, new StereoOnWithCDCommand($stereo), new StereoOffCommand($stereo));

$ceilingFan = new CeilingFan('kitchen');
$controller->setCommand(2, new CeilingFanHighCommand($ceilingFan), new CeilingFanOffCommand($ceilingFan));

$controller->printControls();

$controller->onButtonWasPushed(0);
$controller->offButtonWasPushed(0);

$controller->onButtonWasPushed(1);
$controller->offButtonWasPushed(1);

$controller->onButtonWasPushed(2);
$controller->offButtonWasPushed(2);
$controller->undoButtonWasPushed(2);


$partyOn = [
    new LightOnCommand($light),
    new StereoOnWithCDCommand($stereo),
    new CeilingFanHighCommand($ceilingFan),
];

$partyOff = [
    new LightOffCommand($light),
    new StereoOffCommand($stereo),
    new CeilingFanOffCommand($ceilingFan),
];

$controller->setCommand(3, new MacroCommand($partyOn), new MacroCommand($partyOff));
$controller->onButtonWasPushed(3);
$controller->offButtonWasPushed(3);
