<?php

namespace Maris\Interfaces\Geo\Model;

/***
 * Модель маршрута.
 */
interface DirectionInterface
{
    /***
     * Возвращает маршруты.
     * @return array<RouteInterface>
     */
    public function getRoutes():array;

    /**
     * Возвращает путевые точки.
     * @return array<WaypointInterface>
     */
    public function getWaypoints():array;
}