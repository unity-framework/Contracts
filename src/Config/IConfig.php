<?php

namespace Unity\Contracts\Config;

/**
 * Interface IConfig.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
interface IConfig
{
    /**
     * Gets a configuration value.
     *
     * @param $config
     *
     * @return mixed
     */
    function get($config);

    /**
     * Checks ifs a configuration exists.
     *
     * @param $config
     *
     * @return bool
     */
    function has($config);

    /**
     * Gets all available configurations.
     *
     * @return array
     */
    function getAll();
}
