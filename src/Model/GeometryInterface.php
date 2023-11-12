<?php

namespace Maris\Interfaces\Geo\Model;

use JsonSerializable;
use Maris\Interfaces\Geo\Aggregate\BoundsAggregateInterface;

/**
 * Интерфейс фигуры на карте.
 */
interface GeometryInterface extends BoundsAggregateInterface, JsonSerializable
{
    /**
     * Приводит фигуру к массиву.
     * Массив представляет собой объект geometry geoJson.
     * @return array{ type:string,coordinates:float[]|float[][]|float[][][] }
     */
    public function jsonSerialize():array;

}