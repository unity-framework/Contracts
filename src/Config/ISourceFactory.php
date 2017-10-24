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
     * @param string $file   Our source.
     * @param string $driver The driver that will be used.
     *
     * @return bool|ISource
     */
    public function makeFromFile($file, $driver = null);
}
