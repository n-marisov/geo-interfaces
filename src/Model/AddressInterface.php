<?php

namespace Maris\Interfaces\Geo\Model;

/***
 * Интерфейс адреса.
 */
interface AddressInterface
{
    /**
     * Возвращает отформатированный удобный для чтения адрес.
     * @return string
     */
    public function getFormattedAddress():string;

    /***
     * Возвращает полный Юридический адрес.
     * @return string
     */
    public function getLegalAddress():string;
}