<?php

namespace Maris\Interfaces\Geo\AbstractModel;

use Maris\Interfaces\Geo\Model\BoundsInterface;

/**
 * Абстрактная реализация объекта границ.
 */
abstract class AbstractBounds implements BoundsInterface
{

    protected float $north;

    protected float $west;

    protected float $south;

    protected float $east;

    /**
     * @param float $north
     * @param float $west
     * @param float $south
     * @param float $east
     */
    public function __construct(float $north, float $west, float $south, float $east)
    {
        $this->north = $north;
        $this->west = $west;
        $this->south = $south;
        $this->east = $east;
    }

    /**
     * @return float
     */
    public function getNorth(): float
    {
        return $this->north;
    }

    /**
     * @return float
     */
    public function getWest(): float
    {
        return $this->west;
    }

    /**
     * @return float
     */
    public function getSouth(): float
    {
        return $this->south;
    }

    /**
     * @return float
     */
    public function getEast(): float
    {
        return $this->east;
    }

    public function jsonSerialize(): array
    {
        return [$this->north,$this->west,$this->south,$this->east];
    }


}