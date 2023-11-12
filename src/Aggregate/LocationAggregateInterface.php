<?php

namespace Maris\Interfaces\Geo\Aggregate;

use Maris\Interfaces\Geo\Model\LocationInterface;

/**
 * Интерфейс для объектов способных возвращать
 * точку в обычной системе координат.
 */
interface LocationAggregateInterface
{
    /***
     * Возвращает координату.
     * @return LocationInterface|null
     */
    public function getLocation(): ?LocationInterface;
}