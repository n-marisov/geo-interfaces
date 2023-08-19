<?php

namespace Maris\Interfaces\Geo\Iterator;

use Iterator;
use Maris\Interfaces\Geo\Model\BoundsInterface;

/**
 * Итератор для переборки объектов границ географических фигур.
 */
interface BoundsIteratorInterface extends Iterator
{
    public function current(): ?BoundsInterface;
}