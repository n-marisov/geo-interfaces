<?php

namespace Maris\Symfony\Geo\Interfaces\Finder;


use Maris\Symfony\Geo\Interfaces\Model\LocationAggregateInterface;
use Maris\Symfony\Geo\Interfaces\Model\LocationInterface;

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