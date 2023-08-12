<?php

namespace Maris\Interfaces\Geo\Model;

/**
 * Интерфейс фигуры на карте.
 */
interface GeometryInterface extends BoundsAggregateInterface
{
    public function getId():?int;
}