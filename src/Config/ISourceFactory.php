<?php

namespace Unity\Contracts\Config;

/**
 * Interface ISourceFactory.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
interface ISourceFactory
{
    /**
     * Makes and returns an ISource instance.
     *
     * @param string $file Our source.
     * @param string $driver The driver that will be used.
     * @param null $ext
     *
     * @return bool|ISource
     */
    function makeFromFile($file, $driver = null, $ext = null);

    function makeFromFolder($file, $driver = null, $ext = null);
}
