<?php

namespace Maris\Interfaces\Geo\Model;

use Maris\Interfaces\Geo\Aggregate\LocationAggregateInterface;

/***
 * Интерфейс путевой точки.
 */
interface WaypointInterface extends LocationAggregateInterface
{
    /**
     * Возвращает расстояние от точки запроса до точки привязки.
     * @return float
     */
    public function getAllowed():float;
}