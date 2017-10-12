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
    public function denote($notation);
}
