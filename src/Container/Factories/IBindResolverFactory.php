<?php

namespace Unity\Contracts\Container\Factories;

use Closure;
use Unity\Contracts\Container\IContainer;

/**
 * Interface IBindResolverFactory.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
interface IBindResolverFactory
{
    public function make(Closure $callback, IContainer $container);
}
