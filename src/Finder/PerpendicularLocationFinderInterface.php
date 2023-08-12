<?php

namespace Maris\Interfaces\Geo\Finder;

use Maris\Interfaces\Geo\Model\LocationAggregateInterface;
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
     * @param LocationAggregateInterface $start
     * @param LocationAggregateInterface $end
     * @param LocationAggregateInterface $point
     * @return LocationInterface
     */
    public function findPerpendicularLocation( LocationAggregateInterface $start, LocationAggregateInterface $end,LocationAggregateInterface $point ):LocationInterface;
}