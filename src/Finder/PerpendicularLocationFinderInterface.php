<?php

namespace Maris\Symfony\Geo\Extra\Interfaces\Finder;

use Maris\Symfony\Geo\Entity\Location;
use Maris\Symfony\Geo\Interfaces\LocationAggregateInterface;

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
     * @return Location
     */
    public function findPerpendicularLocation( LocationAggregateInterface $start, LocationAggregateInterface $end,LocationAggregateInterface $point ):Location;
}