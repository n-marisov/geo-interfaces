<?php

namespace Maris\Interfaces\Geo\Factory;

use Maris\Interfaces\Geo\Model\FeatureInterface;
use Maris\Interfaces\Geo\Model\GeometryInterface;

interface FeatureFactoryInterface
{
    public function fromGeometry( GeometryInterface $geometry ):FeatureInterface;
}