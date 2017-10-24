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
<<<<<<< HEAD
     * Gets a configuration value.
=======
     * Returns the configuration value.
>>>>>>> 850bcd9341b47b71661fcb886b925f23e00f6a32
     *
     * @param $config
     *
     * @return mixed
     */
    public function get($config);

    /**
<<<<<<< HEAD
     * Checks ifs a configuration exists.
=======
     * Checks if a configuration exists.
>>>>>>> 850bcd9341b47b71661fcb886b925f23e00f6a32
     *
     * @param $config
     *
     * @return bool
     */
<<<<<<< HEAD
    function has($config);

    /**
     * Gets all available configurations.
     *
     * @return array
     */
    function getAll();
=======
    public function has($config);
>>>>>>> 850bcd9341b47b71661fcb886b925f23e00f6a32
}
