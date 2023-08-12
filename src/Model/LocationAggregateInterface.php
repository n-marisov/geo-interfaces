<?php

namespace Maris\Symfony\Geo\Interfaces\Model;

/**
 * Интерфейс для объектов способных возвращать
 * точку в обычной системе координат.
 */
interface LocationAggregateInterface
{
    public function getLocation():LocationInterface;
}