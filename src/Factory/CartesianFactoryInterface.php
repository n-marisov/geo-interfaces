<?php

namespace Maris\Symfony\Geo\Extra\Interfaces\Factory;

use Maris\Symfony\Geo\Entity\Cartesian;
use Maris\Symfony\Geo\Interfaces\LocationAggregateInterface;

/**
 * Фабрика для создания Декартовых координат.
 */
interface CartesianFactoryInterface
{
    /**
     * Преобразует обычные координаты к Декартовым.
     * @param LocationAggregateInterface $location
     * @return Cartesian
     */
    public function fromLocation( LocationAggregateInterface $location ):Cartesian;
}