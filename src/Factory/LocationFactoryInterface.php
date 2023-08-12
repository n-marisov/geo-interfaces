<?php

namespace Maris\Symfony\Geo\Extra\Interfaces\Factory;

use Maris\Symfony\Geo\Entity\Cartesian;
use Maris\Symfony\Geo\Entity\Location;

/**
 * Фабрика для создания координат.
 */
interface LocationFactoryInterface
{

    /***
     * Преобразует точку из Декартовой системы в обычную.
     * @param Cartesian $cartesian
     * @return Location
     */
    public function fromCartesian( Cartesian $cartesian ):Location;
}