<?php

namespace Maris\Interfaces\Geo\Aggregate;

/***
 * Интерфейс для объектов которые способны возвращать
 * протяженность по времени.
 */
interface DurationAggregateInterface
{
    /**
     * Возвращает протяженность по времени.
     * @return float
     */
    public function getDuration():float;
}