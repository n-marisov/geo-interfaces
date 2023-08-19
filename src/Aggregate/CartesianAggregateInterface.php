<?php

namespace Maris\Interfaces\Geo\Aggregate;

use Maris\Interfaces\Geo\Model\CartesianInterface;

/**
 * Интерфейс для объектов способных возвращать
 * точку в Декартовой системе координат.
 */
interface CartesianAggregateInterface
{
    public function getCartesian():CartesianInterface;
}