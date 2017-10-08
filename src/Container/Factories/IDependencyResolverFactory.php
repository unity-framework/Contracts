<?php

namespace Unity\Contracts\Container\Factories;

/**
 * Interface IDependencyResolverFactory.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
interface IDependencyResolverFactory
{
    public function make($entry, IDependencyFactory $dependencyFactory, IContainer $container);
}
