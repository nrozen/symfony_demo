<?php

namespace AppBundle\Lib;

class Automobile
{
    private $vehicleMake;
    private $vehicleModel;

    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}
