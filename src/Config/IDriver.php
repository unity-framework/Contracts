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
     * Parses and loads configurations from `$source`
     *
     * @param $source string Configurations source
     *
     * @return array
     */
    function parse($source) : array;

    /**
     * Returns supported extensions.
     * 
     * @return array
     */
    function extensions() : array;
}
