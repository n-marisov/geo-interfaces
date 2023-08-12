<?php

namespace Maris\Interfaces\Geo\Model;

/***
 * Интерфейс для любой фигуры имеющей границы.
 */
interface BoundsAggregateInterface
{
    /**
     * Возвращает объект границ.
     * @return BoundsInterface
     */
    public function getBounds():BoundsInterface;
}