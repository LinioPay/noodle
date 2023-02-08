<?php

namespace Noodle\Transition\Input;

interface CreatesWithName
{
    /**
     * Creates and returns an input with the given name.
     */
    public static function named(string $name) : Input;
}
