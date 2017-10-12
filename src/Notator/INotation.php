<?php

namespace Unity\Contracts\Notator;

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
