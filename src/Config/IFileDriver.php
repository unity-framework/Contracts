<?php

namespace Unity\Contracts\Config;

/**
 * Interface IFileDriver.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
interface IFileDriver extends IDriver
{
    /**
     * Parses $file content and returns its data
     *
     * @param $file
     *
     * @return array
     */
    function parse($file) : array;
}
