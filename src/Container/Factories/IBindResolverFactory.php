<?php

namespace Unity\Contracts\Container\Factories;

use Closure;

/**
 * Interface IBindResolverFactory.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
interface IBindResolverFactory
{
    public function make(Closure $callback, IContainer $container);
}
