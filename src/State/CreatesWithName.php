<?php

namespace Noodle\State;

interface CreatesWithName
{
    /**
     * Creates and returns a state with the given name.
     */
    public static function named(string $name) : State;
}
