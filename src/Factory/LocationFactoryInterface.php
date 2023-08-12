<?php

namespace Maris\Interfaces\Geo\Factory;

use Maris\Interfaces\Geo\Model\CartesianInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;

/**
 * Фабрика для создания координат.
 */
interface LocationFactoryInterface
{

    /***
     * Преобразует точку из Декартовой системы в обычную.
     * @param CartesianInterface $cartesian
     * @return LocationInterface
     */
    public function fromCartesian( CartesianInterface $cartesian ):LocationInterface;
}