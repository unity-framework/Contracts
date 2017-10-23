<?php

namespace Unity\Contracts\Container\Bind;

/**
 * Interface IBindResolver.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
interface IBindResolver
{
    /**
     * Resolves a value bounded to a class.
     * 
     * @return mixed
     */
    public function resolve();
}
