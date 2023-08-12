<?php

namespace Maris\Symfony\Interfaces\Geo\Model;

/**
 * Интерфейс координаты в декартовой системе координат.
 */
interface CartesianInterface
{
    public function getX():float;
    public function getY():float;
    public function getZ():float;
}