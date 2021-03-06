<?php

namespace Unity\Contracts\Container\Factories;

use Unity\Contracts\Container\Dependency\IDependencyFactory;
use Unity\Contracts\Container\IContainer;

/**
 * Interface IDependencyResolverFactory.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
interface IDependencyResolverFactory
{
    public function make(
        $entry,
        IDependencyFactory $dependencyFactory,
        IBindResolverFactory $bindResolverFactory,
        IContainer $container
    );
}
