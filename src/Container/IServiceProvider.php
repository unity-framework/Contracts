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
<<<<<<< HEAD
     * @param  IContainer $container
=======
     * @param IContainer $container
     *
     * @return array
>>>>>>> 850bcd9341b47b71661fcb886b925f23e00f6a32
     */
    public function register(IContainer $container);
}
