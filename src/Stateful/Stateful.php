<?php

namespace Noodle\Stateful;

use Noodle\State\State;

interface Stateful
{
    /**
     * Returns whether or not the Stateful object has a current state.
     */
    public function hasCurrentState() : bool;

    /**
     * Returns the Stateful object's current state.
     */
    public function getCurrentState() : State;

    /**
     * Returns the name of the Stateful object's current state.
     */
    public function getCurrentStateName() : string;

    /**
     * Sets the Stateful object's current state.
     *
     * @return void
     */
    public function setCurrentState(State $state);
}
