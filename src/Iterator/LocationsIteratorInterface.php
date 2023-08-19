<?php

namespace Maris\Interfaces\Geo\Iterator;

use Maris\Interfaces\Geo\Model\LocationInterface;

/**
 * Итератор для переборки координат в географической системе.
 */
interface LocationsIteratorInterface extends GeometriesIteratorInterface
{
    public function current(): ?LocationInterface;
}