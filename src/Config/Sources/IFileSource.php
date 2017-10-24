<?php

namespace Unity\Contracts\Config;

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
