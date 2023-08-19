<?php

namespace Maris\Interfaces\Geo\Collection;

use IteratorAggregate;
use JsonSerializable;
use Maris\Interfaces\Geo\Aggregate\BoundsAggregateInterface;
use Maris\Interfaces\Geo\Iterator\FeaturesIteratorInterface;
use Maris\Interfaces\Geo\Model\FeatureInterface;

interface FeatureCollectionInterface extends BoundsAggregateInterface, JsonSerializable, IteratorAggregate
{
    /***
     * @return array<FeatureInterface>
     */
    public function getFeatures():array;

    /**
     * @return FeaturesIteratorInterface
     */
    public function getIterator(): FeaturesIteratorInterface;
}