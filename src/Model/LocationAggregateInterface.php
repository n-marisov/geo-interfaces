<?php

namespace Maris\Interfaces\Geo\Model;

/**
 * Интерфейс для объектов способных возвращать
 * точку в обычной системе координат.
 */
interface LocationAggregateInterface
{
    public function getLocation():LocationInterface;
}