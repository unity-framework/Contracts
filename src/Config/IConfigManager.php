<?php

namespace Unity\Contracts\Config;

/**
 * Interface IConfigManager.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
interface IConfigManager
{
    /**
     * Sets the configuration source.
     *
     * @param strin $source
     *
     * @return static
     */
    public function setSource($source);

    /**
     * Sets the extension for configuration(s) files.
     * 
     * Useful if your configuration
     * file has'nt an extension, also
     * helps the auto driver detection
     * being fast.
     *
     * @param mixed $ext
     *
     * @return static
     */
    public function setExt($ext);

    /**
     * Sets the Driver to be used when
     * trying retrieve configurations data.
     *
     * @param string $driver
     *
     * @return static
     */
    public function setDriver($driver);

    /**
     * Sets the DI container.
     *
     * @param IContainer $container
     *
     * @return static
     */
    public function setContainer(IContainer $container);

    /**
     * Checks if a source was provided.
     *
     * @return bool
     */
    public function hasSource();
    
    /**
     * Sets the DI container.
     *
     * @return bool
     */
    public function hasContainer();

    /**
     * Sets the cache path.
     *
     * It's also actives the caching.
     *
     * @param $path
     *
     * @return static
     */
    public function setCachePath($path);
    
    /**
     * Checks if the cache is enabled.
     *
     * @return bool
     */
    public function isCacheEnabled();
}