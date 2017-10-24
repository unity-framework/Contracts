<?php

namespace Unity\Contracts\Config\Factories;

interface IDriverFactory
{
    /**
     * Gets the driver that `$alias` represents.
     *
     * @param $alias
     *
     * @return string
     */
    function get($alias);

    /**
     * Checks if a driver within the given `$alias` exists.
     *
     * @param $alias
     *
     * @return bool
     */
    function has($alias);

    /**
     * Returns all available drivers.
     *
     * @return array
     */
    function getAll();

    /**
     * Makes an IDriver instance based on the given `$extension`.
     *
     * @param $extension string
     *
     * @return IDriver|false
     */
    function makeFromExt($extension);

    /**
     * Makes an IDriver instance based on the given `$file` extension
     *
     * @param $file string
     *
     * @return IDriver|false
     */
    function makeFromFile($file);
    
    /**
     * Makes an IDriver instance based on the given `$alias`.
     *
     * @param $alias string
     *
     * @return IDriver|false
     */
    function makeFromAlias($alias);
}