<?php

namespace core\context;

use core\algorithm\Mission;

abstract class WorkSystem
{
    protected Mission $missionType;

    public function __construct(protected string $name)
    {
    }

    public function goInMission() {

        echo $this->missionType->mission();
    }

    public function changeMissionType(Mission $missionType) {

        $this->missionType = $missionType;
    }
}
