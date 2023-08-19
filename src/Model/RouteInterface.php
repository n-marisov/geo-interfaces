<?php

namespace Maris\Interfaces\Geo\Model;

use Maris\Interfaces\Geo\Aggregate\PolylineAggregateInterface;

/**
 * Модель маршрута.
 */
interface RouteInterface extends PolylineAggregateInterface
{
    /***
     * Протяженность маршрута.
     * @return float
     */
    public function getDistance():float;

    /***
     * Время в пути по маршруту.
     * @return float
     */
    public function getDuration():float;

    /***
     * Возвращает ноги маршрута.
     * @return array
     */
    public function getLegs():array;
}