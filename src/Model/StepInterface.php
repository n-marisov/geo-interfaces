<?php

namespace Maris\Interfaces\Geo\Model;

use Maris\Interfaces\Geo\Aggregate\PolylineAggregateInterface;

/**
 * Один шаг маршрута.
 */
interface StepInterface extends PolylineAggregateInterface
{
    /**
     * Расстояние шага.
     * @return float
     */
    public function getDistance():float;

    /**
     * Время прохождения шага.
     * @return float
     */
    public function getDuration():float;

}