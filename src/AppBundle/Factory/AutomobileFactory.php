<?php

namespace AppBundle\Factory;

use AppBundle\Lib\Automobile;

class AutomobileFactory
{

    public static function create()
    {

        return "test";

    }

    public static function create2($make, $model)
    {

        return new Automobile($make, $model);

    }
}
