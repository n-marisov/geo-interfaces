<?php

namespace Maris\Interfaces\Geo\Aggregate;

use Maris\Interfaces\Geo\Model\GeometryInterface;

/**
 * Интерфейс для объектов способных хранить внутри себя любую географическую фигуру.
 */
interface GeometryAggregateInterface
{
    /***
     * Возвращает географическую фигуру.
     * @return GeometryInterface|null
     */
    public function getGeometry():?GeometryInterface;
}