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
     * @param LocationAggregateInterface|LocationInterface $start
     * @param LocationAggregateInterface|LocationInterface $end
     * @return LocationInterface
     */
    public function findMidLocation( LocationAggregateInterface|LocationInterface $start, LocationAggregateInterface|LocationInterface $end ):LocationInterface;
}