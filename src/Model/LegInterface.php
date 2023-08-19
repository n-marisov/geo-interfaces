<?php

namespace Maris\Interfaces\Geo\Model;

use Maris\Interfaces\Geo\Aggregate\PolylineAggregateInterface;

/**
 * Одна нога маршрута.
 */
interface LegInterface extends PolylineAggregateInterface
{
    public function getDistance():float;

    public function getDuration():float;

    /**
     * Возвращает шаги одной ноги маршрута.
     * @return array
     */
    public function getSteps():array;
}