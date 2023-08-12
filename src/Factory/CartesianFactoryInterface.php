<?php

namespace Maris\Symfony\Interfaces\Geo\Factory;

use Maris\Symfony\Interfaces\Geo\Model\LocationAggregateInterface;
use Maris\Symfony\Interfaces\Geo\Model\CartesianInterface;

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