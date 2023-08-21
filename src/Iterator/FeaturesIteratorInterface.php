<?php

namespace Maris\Interfaces\Geo\Iterator;

use Iterator;
use Maris\Interfaces\Geo\Model\FeatureInterface;

/***
 * Интерфейс итератора для переборки FeatureInterface объектов.
 */
interface FeaturesIteratorInterface extends Iterator
{
    public function current(): ?FeatureInterface;
}