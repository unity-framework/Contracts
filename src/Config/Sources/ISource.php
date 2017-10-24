<?php

namespace Unity\Contracts\Config\Sources;

/**
 * Interface ISource.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
interface ISource
{
    /**
     * @return array
     */
    public function getData();

    /**
<<<<<<< HEAD:src/Config/Sources/ISource.php
     * @return mixed
     */
    function getSource();
=======
     * @return string
     */
    public function getKey();

    /**
     * @return bool
     */
    public function hasKey();

    /**
     * @return mixed
     */
    public function getSource();

    /**
     * @return string
     */
    public function getDriver();
>>>>>>> 850bcd9341b47b71661fcb886b925f23e00f6a32:src/Config/ISource.php
}
