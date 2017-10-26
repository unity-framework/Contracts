<?php

namespace Unity\Contracts\Config\Sources;

/**
 * Interface ISourceFile
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
interface ISourceFile extends ISource
{    
    /**
     * @return string
     */
    function getKey();
}
