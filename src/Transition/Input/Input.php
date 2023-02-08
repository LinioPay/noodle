<?php

declare(strict_types=1);

namespace Noodle\Transition\Input;

interface Input
{
    /**
     * Returns the name of the input.
     */
    public function getName() : string;
}
