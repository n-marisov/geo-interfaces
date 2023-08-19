<?php

namespace Maris\Interfaces\Geo\Aggregate;

use Maris\Interfaces\Geo\Model\GeometryInterface;

interface GeometryAggregateInterface
{
    public function getGeometry():GeometryInterface;
}