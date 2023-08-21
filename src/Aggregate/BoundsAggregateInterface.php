<?php

namespace Maris\Interfaces\Geo\Aggregate;

use Maris\Interfaces\Geo\Model\BoundsInterface;

/***
 * Интерфейс для любой фигуры имеющей границы.
 */
interface BoundsAggregateInterface
{
    /**
     * Возвращает объект границ.
     * @return BoundsInterface|null
     */
    public function getBounds():?BoundsInterface;
}