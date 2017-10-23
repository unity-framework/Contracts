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



    /**
     * Enable|Disable autowiring.
     *
     * Tells the container if it should auto wiring.
     *
     * @param bool $enable
     *
     * @return $this
     */
    public function enableAutowiring($enable);

    /**
     * Checks if injection is enabled.
     *
     * @return bool
     */
    protected function canAutowiring();

    /**
     * Enable|Disable the use of annotations.
     *
     * Tells the container if it can inspect annotations
     * searching for properties or constructor dependencies.
     *
     * @param bool $enable
     *
     * @return $this
     */
    public function enableUseAnnotation($enable);

    /**
     * Checks if the use of annotations is enabled.
     *
     * @return bool
     */
    public function canUseAnnotations();
}
