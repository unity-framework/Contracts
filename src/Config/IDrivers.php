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
    public function has($driver);

    /**
     * Returns all available drivers aliases and their supported extensions.
     *
     * @return array
     */
    public function getAll();

    /**
     * Checks if at least one driver supports the given `$source`.
     *
     * @param string $source
     *
     * @return bool
     */
    public function offersSupportFor($source);
}
