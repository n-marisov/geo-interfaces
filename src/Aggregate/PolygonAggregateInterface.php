<?php

namespace Maris\Interfaces\Geo\Aggregate;

use Maris\Interfaces\Geo\Model\PolygonInterface;

/**
 * Интерфейс для объектов которые могут содержать
 * полигон.
 */
interface PolygonAggregateInterface extends GeometryAggregateInterface
{
    /***
     * Возвращает полигон.
     * @return PolygonInterface|null
     */
    public function getGeometry():?PolygonInterface;
}