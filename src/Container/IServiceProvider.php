<?php

namespace Unity\Contracts\Container;

use Unity\Contracts\Container\IContainer;

/**
 * Interface IServiceProvider.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
interface IServiceProvider
{
    /**
     * Register services.
     *
     * @param  IContainer $container
     * 
     * @return array
     */
    public function register(IContainer $container);
}
