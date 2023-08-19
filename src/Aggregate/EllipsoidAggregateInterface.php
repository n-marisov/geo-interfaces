<?php

namespace Maris\Interfaces\Geo\Aggregate;

use Maris\Interfaces\Geo\Model\EllipsoidInterface;

interface EllipsoidAggregateInterface
{
    /**
     * Возвращает эллипсоид.
     * @return EllipsoidInterface
     */
    public function getEllipsoid():EllipsoidInterface;
}