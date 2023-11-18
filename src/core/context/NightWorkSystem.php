<?php

namespace core\context;

use core\algorithm\DontGoInMission;

class NightWorkSystem extends WorkSystem
{
    public function __construct(protected string $name, protected string $lunchMeal)
    {
        parent::__construct($name);
        $this->missionType = new DontGoInMission();
    }
}
