<?php

namespace Maris\Interfaces\Geo\Aggregate;

use Maris\Interfaces\Geo\Model\PolylineInterface;

/**
 * Интерфейс для полилиния-подобных объектов.
 */
interface PolylineAggregateInterface
{
    /**
     * Возвращает полилинию.
     * @return PolylineInterface|null
     */
    public function getPolyline():?PolylineInterface;
}