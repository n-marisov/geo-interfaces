<?php

namespace Maris\Interfaces\Geo\Finder;

use Maris\Interfaces\Geo\Aggregate\LocationAggregateInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;

/**
 * Интерфейс для поиска точки по перпендикуляру к большому кругу.
 */
interface PerpendicularLocationFinderInterface
{
    /**
     * Находит точку на большом круге образованным
     * точками $start и $end в которую можно опустить
     * перпендикуляр из точки $point.
     * @param LocationAggregateInterface|LocationInterface $start
     * @param LocationAggregateInterface|LocationInterface $end
     * @param LocationAggregateInterface|LocationInterface $point
     * @return LocationInterface
     */
    public function findPerpendicularLocation( LocationAggregateInterface|LocationInterface $start, LocationAggregateInterface|LocationInterface $end,LocationAggregateInterface|LocationInterface $point ):LocationInterface;
}