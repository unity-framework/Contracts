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
     * Sets the IContainer instance.
     *
     * @param IContainer $container
     */
    public function setContainer(IContainer $container);

    /**
     * Makes a `$class` instance.
     *
     * @param string $class        Class name.
     * @param array  $dependencies Constructor dependencies.
     *
     * @return mixed|object
     */
    public function make($class, $dependencies = []);
}
