<?php

namespace Maris\Symfony\Geo\Interfaces\Factory;

use Maris\Symfony\Geo\Interfaces\LocationAggregateInterface;
use Maris\Symfony\Geo\Interfaces\Model\CartesianInterface;

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