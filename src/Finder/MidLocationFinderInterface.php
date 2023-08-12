<?php

namespace Maris\Symfony\Interfaces\Geo\Finder;


use Maris\Symfony\Interfaces\Geo\Model\LocationAggregateInterface;
use Maris\Symfony\Interfaces\Geo\Model\LocationInterface;

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