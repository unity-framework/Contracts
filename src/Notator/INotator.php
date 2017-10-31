<?php

namespace Unity\Contracts\Notator;

interface INotator
{
    /**
     * Denotes a string.
     *
     * @param $notation
     *
     * @return string
     */
    public function denote($notation);
}
