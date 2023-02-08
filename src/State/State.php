<?php

declare(strict_types=1);

namespace Noodle\State;

interface State
{
    /**
     * Returns the name of the state.
     */
    public function getName() : string;
}
