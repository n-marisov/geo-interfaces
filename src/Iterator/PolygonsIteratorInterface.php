<?php

namespace Maris\Interfaces\Geo\Iterator;

use Maris\Interfaces\Geo\Model\PolygonInterface;

/**
 * Итератор для переборки полигонов.
 */
interface PolygonsIteratorInterface extends GeometriesIteratorInterface
{
    public function current(): ?PolygonInterface;
}