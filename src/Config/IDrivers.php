<?php

namespace Unity\Component\Config\Contracts;

/**
 * Interface IDriver.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
interface IDrivers
{
    /**
     * Checks if a driver with the given alias exists.
     *
     * @param $driver
     *
     * @return bool
     */
    function has($driver);

    /**
     * Returns all available drivers aliases and their supported extensions.
     *
     * @return array
     */
    function getAll();

    /**
     * Checks if at least one driver supports the given `$source`.
     *
     * @param string $source
     *
     * @return bool
     */
    function offersSupportFor($source);
}
