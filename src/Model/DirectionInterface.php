<?php

namespace Maris\Interfaces\Geo\Model;

/***
 * Модель маршрута.
 */
interface DirectionInterface
{
    /***
     * Возвращает маршруты.
     * @return iterable<RouteInterface>
     */
    public function getRoutes():iterable;

    /**
     * Возвращает путевые точки.
     * @return iterable<WaypointInterface>
     */
    public function getWaypoints():iterable;
}