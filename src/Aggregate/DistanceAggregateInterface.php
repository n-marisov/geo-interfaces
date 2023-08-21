<?php

namespace Maris\Interfaces\Geo\Aggregate;

/***
 * Интерфейс для объектов способных возвращать расстояние.
 */
interface DistanceAggregateInterface
{
    /**
     * Возвращает расстояние.
     * @return float
     */
    public function getDistance():float;
}