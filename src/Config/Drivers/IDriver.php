<?php

namespace Unity\Contracts\Config\Drivers;

/**
 * Interface IDriver.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
interface IDriver
{
    /**
     * Loads configurations from `$source`
     *
     * @param $source string Configurations source
     *
     * @return array
     */
    function Load($source) : array;

    /**
     * Returns supported extensions.
     * 
     * @return array
     */
    function extensions() : array;
}
