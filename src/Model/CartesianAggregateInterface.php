<?php

namespace Maris\Symfony\Interfaces\Geo\Model;

/**
 * Интерфейс для объектов способных возвращать
 * точку в Декартовой системе координат.
 */
interface CartesianAggregateInterface
{
    public function getCartesian():CartesianInterface;
}