<?php

namespace Maris\Interfaces\Geo\Factory;

use Maris\Interfaces\Geo\Model\LocationAggregateInterface;
use Maris\Interfaces\Geo\Model\CartesianInterface;

/**
 * Фабрика для создания Декартовых координат.
 */
interface CartesianFactoryInterface
{
    /**
     * Преобразует обычные координаты к Декартовым.
     * @param LocationAggregateInterface $location
     * @return CartesianInterface
     */
    public function fromLocation( LocationAggregateInterface $location ):CartesianInterface;
}