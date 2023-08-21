<?php

namespace Maris\Interfaces\Geo\Aggregate;

use Maris\Interfaces\Geo\Model\PolylineInterface;

/**
 * Интерфейс для полилиния-подобных объектов.
 */
interface PolylineAggregateInterface extends GeometryAggregateInterface
{
    /**
     * Возвращает полилинию.
     * @return PolylineInterface|null
     */
    public function getGeometry():?PolylineInterface;
}