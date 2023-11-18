<?php

namespace core\context;

use core\algorithm\GoInMission;

class MorningWorkSystem extends WorkSystem
{

    public function __construct(protected string $name, protected string $breakfastMeal)
    {
        parent::__construct($name);
        $this->missionType = new GoInMission();
    }
}
