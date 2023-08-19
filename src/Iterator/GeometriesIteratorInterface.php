<?php

namespace Maris\Interfaces\Geo\Iterator;

use Iterator;
use Maris\Interfaces\Geo\Model\GeometryInterface;

/**
 * Итератор для переборки геометрических фигур.
 */
interface GeometriesIteratorInterface extends Iterator
{
    public function current(): ?GeometryInterface;
}