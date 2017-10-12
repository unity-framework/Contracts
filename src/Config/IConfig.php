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
     * Returns the configuration value.
     *
     * @param $config
     *
     * @return mixed
     */
    public function get($config);

    /**
     * Checks if a configuration exists.
     *
     * @param $config
     *
     * @return bool
     */
    public function has($config);
}
