<?php

namespace Maris\Interfaces\Geo\Aggregate;

use Maris\Interfaces\Geo\Model\PlaceInterface;

/***
 * Интерфейс для объектов способных хранить внутри себя точку интереса.
 */
interface PlaceAggregateInterface
{
    /***
     * Возвращает точку интереса.
     * @return PlaceInterface|null
     */
    public function getPlace():?PlaceInterface;
}