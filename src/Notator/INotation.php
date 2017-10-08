<?php

namespace Unity\Contracts\Config;

interface INotation
{
    /**
     * Denotes a string
     *
     * @param $notation
     *
     * @return string
     */
    static function denote($notation);
}