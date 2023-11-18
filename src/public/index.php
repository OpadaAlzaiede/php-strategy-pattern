<?php

declare(strict_types=1);

define("BASE_PATH", __DIR__ . "/../");

spl_autoload_register(function($class) {

    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);

    require_once BASE_PATH . $class . ".php";
});


$workSystem1 = new \core\context\NightWorkSystem("work-system-1", "Eggs");

$workSystem1->goInMission();
$workSystem1->changeMissionType(new \core\algorithm\GoInMission());
$workSystem1->goInMission();


