<?php

namespace Maris\Interfaces\Geo\Model;

use Maris\Interfaces\Geo\Aggregate\DistanceAggregateInterface;
use Maris\Interfaces\Geo\Aggregate\DurationAggregateInterface;
use Maris\Interfaces\Geo\Aggregate\PolylineAggregateInterface;

/**
 * Одна нога маршрута.
 */
interface LegInterface extends PolylineAggregateInterface,DistanceAggregateInterface,DurationAggregateInterface
{
    /**
     * Возвращает шаги одной ноги маршрута.
     * @return array
     */
    public function getSteps():array;
}