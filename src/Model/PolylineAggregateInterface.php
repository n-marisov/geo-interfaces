<?php

namespace Maris\Interfaces\Geo\Model;

/**
 * Интерфейс для полилиния-подобных объектов.
 */
interface PolylineAggregateInterface
{
    /**
     * Возвращает полилинию.
     * @return PolylineInterface
     */
    public function getPolyline():PolylineInterface;
}