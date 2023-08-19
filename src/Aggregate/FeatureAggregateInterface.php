<?php

namespace Maris\Interfaces\Geo\Aggregate;

use Maris\Interfaces\Geo\Model\FeatureInterface;

interface FeatureAggregateInterface
{
    public function getFeature():FeatureInterface;
}