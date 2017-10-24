<?php

namespace Unity\Contracts\Config\Sources;

/**
 * Interface IFileSource
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
interface IFileSource extends ISource
{    
    /**
     * @return string
     */
    function getKey();
}
