<?php

namespace Maris\Interfaces\Geo\Iterator;

use Maris\Interfaces\Geo\Model\PolylineInterface;

/**
 * Итератор для переборки полилиний.
 */
interface PolylinesIteratorInterface extends GeometriesIteratorInterface
{
    public function current(): ?PolylineInterface;
}