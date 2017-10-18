<?php

namespace Unity\Contracts\Config;

/**
 * Interface ISource
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
interface ISource
{
    /**
     * @return array
     */
    function getData();

    /**
     * @return mixed
     */
    function getSource();
}
