<?php

namespace Maris\Interfaces\Geo\Model;

use Maris\Interfaces\Geo\Aggregate\PolylineAggregateInterface;

/**
 * Одна нога маршрута.
 */
interface LegInterface extends PolylineAggregateInterface
{
    /**
     * Протяженность ноги.
     * @return float
     */
    public function getDistance():float;

    /**
     * Время в пути для ноги.
     * @return float
     */
    public function getDuration():float;

    /**
     * Возвращает шаги одной ноги маршрута.
     * @return array
     */
    public function getSteps():array;
}