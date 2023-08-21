<?php

namespace Maris\Interfaces\Geo\Aggregate;

use Maris\Interfaces\Geo\Model\FeatureInterface;

/***
 * Интерфейс для объектов способных хранить внутри себя FeatureInterface.
 */
interface FeatureAggregateInterface
{

    public function getFeature():FeatureInterface;
}