<?php

namespace Noodle\Transition;

interface CreateableFromPattern
{
    /**
     * Creates a transition object by using a previously set pattern against
     * the provided string representing a transition to extract the input,
     * current state, and next state. If no pattern has previously been set,
     * a sensible default will be used.
     */
    public static function new(string $transition) : Transition;

    /**
     * Returns the configured pattern, or a default, if none is set.
     */
    public static function getPattern() : string;

    /**
     * Configures the pattern to use.
     *
     * @return void
     */
    public static function usePattern(string $pattern);
}
