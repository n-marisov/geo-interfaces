<?php

namespace Maris\Interfaces\Geo\Aggregate;

use Maris\Interfaces\Geo\Model\AddressInterface;

/***
 * Интерфейс для объектов способных хранить внутри себя адрес.
 */
interface AddressAggregateInterface
{
    /***
     * Возвращает адрес.
     * @return AddressInterface|null
     */
    public function getAddress():?AddressInterface;
}