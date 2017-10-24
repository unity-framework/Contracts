<?php

namespace Unity\Contracts\Container\Dependency;

use Unity\Contracts\Container\IContainer;

/**
 * Interface IDependencyFactory.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
interface IDependencyFactory
{
    /**
     * Makes a `$class` instance.
     *
     * @param string $class        Class name.
     * @param array  $arguments Constructor arguments.
     * @param array  $binds Constructor parameter binds.
     *
     * @return mixed|object
     */
    public function make($class, $arguments = [], $binds = []);
}
