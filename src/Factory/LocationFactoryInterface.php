<?php

namespace Maris\Symfony\Geo\Interfaces\Factory;

use Maris\Symfony\Geo\Interfaces\Model\CartesianInterface;
use Maris\Symfony\Geo\Interfaces\Model\LocationInterface;

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