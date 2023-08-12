<?php

namespace Maris\Symfony\Geo\Extra\Interfaces\Finder;

use Maris\Symfony\Geo\Entity\Location;
use Maris\Symfony\Geo\Interfaces\LocationAggregateInterface;

/**
 * Сервисы способные находить среднюю точку
 * на линии
 */
interface MidLocationFinderInterface
{
    /**
     * Вычисляет среднюю точку
     * @param LocationAggregateInterface $start
     * @param LocationAggregateInterface $end
     * @return Location
     */
    public function findMidLocation( LocationAggregateInterface $start, LocationAggregateInterface $end ):Location;
}