<?php

namespace Maris\Interfaces\Geo\Model;

use Maris\Interfaces\Geo\Aggregate\DistanceAggregateInterface;
use Maris\Interfaces\Geo\Aggregate\DurationAggregateInterface;
use Maris\Interfaces\Geo\Aggregate\PolylineAggregateInterface;

/**
 * Один шаг маршрута.
 */
interface StepInterface extends PolylineAggregateInterface,DistanceAggregateInterface,DurationAggregateInterface
{

}