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
     * Parses and loads configurations from `$source`.
     *
     * @param $source string Configurations source
     *
     * @return array
     */
    public function parse($source) : array;

    /**
     * Returns supported extensions.
     *
     * @return array
     */
    public function extensions() : array;
}
