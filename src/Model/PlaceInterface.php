<?php

namespace Maris\Interfaces\Geo\Model;

use Maris\Interfaces\Geo\Aggregate\AddressAggregateInterface;
use Maris\Interfaces\Geo\Aggregate\LocationAggregateInterface;

/***
 * Интерфейс точки интереса.
 */
interface PlaceInterface extends AddressAggregateInterface, LocationAggregateInterface
{
    /**
     * Возвращает название точки интереса.
     * @return string
     */
    public function getTitle():string;
}