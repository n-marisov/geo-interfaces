<?php

namespace Maris\Interfaces\Geo\Model;

/**
 * Интерфейс фигуры на карте.
 */
interface GeometryInterface extends BoundsInterface
{
    public function getId():?int;
}