<?php

namespace Maris\Interfaces\Geo\AbstractModel;

use Maris\Interfaces\Geo\Model\BoundsInterface;
use Maris\Interfaces\Geo\Model\FeatureInterface;
use Maris\Interfaces\Geo\Model\GeometryInterface;

abstract class AbstractFeature implements FeatureInterface
{

    /**
     * @inheritDoc
     */
    public function getBounds(): BoundsInterface
    {
        return $this->getGeometry()->getBounds();
    }

    public function toArray(): array
    {
        return $this->getGeometry()->toArray();
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}