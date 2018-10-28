<?php

namespace Market;

use \Autumn\Annotation\RestController;
use \Autumn\Annotation\RequestMapping;

/**
 * @RestController
 */
class CarController
{
    /**
     * @RequestMapping(value="/cars", method="GET")
     */
    public function list()
    {
        $cars = [];
        for ($i=1; $i<=10; ++$i) {
            $car = new Car();
            $car->id = $i;
            $cars[] = $car;
        }

        return $cars;
    }
}