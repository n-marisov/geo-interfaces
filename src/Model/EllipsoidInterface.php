<?php

namespace Maris\Interfaces\Geo\Model;

/***
 * Интерфейс эллипсоида.
 */
interface EllipsoidInterface
{
    /**
     * Возвращает полярный радиус планеты.
     * @return float
     */
    public function getPolarRadius():float;

    /**
     * Возвращает экваториальный радиус планеты.
     * @return float
     */
    public function getEquatorRadius():float;

    /**
     * Возвращает средне-арифметический радиус планеты.
     * @return float
     */
    public function getArithmeticMeanRadius():float;

    /**
     * Возвращает степень сжатия планеты.
     * @return float
     */
    public function getFlattening():float;

    /**
     * Возвращает обратную степень сжатия планеты.
     * @return float
     */
    public function getReverseFlattening():float;
}