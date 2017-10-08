<?php

namespace Unity\Contracts\Config;

/**
 * Interface IDriver.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
interface IDriver
{
    /**
     * Loads all configurations from the source
     *
     * @param $source mixed Configurations source
     *
     * @return array
     */
    function load($source) : array;
}
