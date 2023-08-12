<?php

namespace Maris\Symfony\Geo\Interfaces\Model;

/**
 * Интерфейс точки в прямой системе координат.
 */
interface LocationInterface
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