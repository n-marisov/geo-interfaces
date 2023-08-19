<?php

namespace Maris\Interfaces\Geo\Model;

/**
 * Интерфейс точки в географической системе координат.
 */
interface LocationInterface extends GeometryInterface
{
    /**
     * Возвращает широту.
     * @return float
     */
    public function getLatitude():float;

    /**
     * Возвращает долготу.
     * @return float
     */
    public function getLongitude():float;

}