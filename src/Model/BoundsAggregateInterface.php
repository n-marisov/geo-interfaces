<?php

namespace Maris\Symfony\Geo\Interfaces\Model;

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