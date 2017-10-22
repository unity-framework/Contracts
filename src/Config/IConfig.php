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
     * Returns the configuration value
     *
     * @param $config
     *
     * @return mixed
     */
    function get($config);

    /**
     * Checks if a configuration exists
     *
     * @param $config
     *
     * @return bool
     */
    function has($config);
}
