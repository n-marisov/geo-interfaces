<?php

namespace Maris\Interfaces\Geo\Finder;


use Maris\Interfaces\Geo\Model\LocationAggregateInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;

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
     * @return LocationInterface
     */
    public function findMidLocation( LocationAggregateInterface $start, LocationAggregateInterface $end ):LocationInterface;
}