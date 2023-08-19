<?php

namespace Maris\Interfaces\Geo\Model;

use Maris\Interfaces\Geo\Aggregate\PolylineAggregateInterface;

/**
 * Модель маршрута.
 */
interface RouteInterface extends PolylineAggregateInterface
{
    public function getDistance():float;

    public function getDuration():float;

    /***
     * Возвращает ноги маршрута.
     * @return array
     */
    public function getLegs():array;
}