<?php

namespace Maris\Interfaces\Geo\Iterator;

use Iterator;
use Maris\Interfaces\Geo\Model\CartesianInterface;

/**
 * Итератор для переборки координат в декартовой системе.
 */
interface CartesianIteratorInterface extends Iterator
{
    public function current(): ?CartesianInterface;
}