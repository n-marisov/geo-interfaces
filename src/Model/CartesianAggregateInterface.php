<?php

namespace Maris\Symfony\Geo\Interfaces\Model;

/**
 * Интерфейс для объектов способных возвращать
 * точку в Декартовой системе координат.
 */
interface CartesianAggregateInterface
{
    public function getCartesian():CartesianInterface;
}