<?php

namespace Maris\Interfaces\Geo\Model;

use Maris\Interfaces\Geo\Aggregate\DistanceAggregateInterface;
use Maris\Interfaces\Geo\Aggregate\DurationAggregateInterface;
use Maris\Interfaces\Geo\Aggregate\PolylineAggregateInterface;

/**
 * Модель маршрута.
 */
interface RouteInterface extends PolylineAggregateInterface,DistanceAggregateInterface,DurationAggregateInterface
{
    /***
     * Возвращает ноги маршрута.
     * @return array
     */
    public function getLegs():array;
}