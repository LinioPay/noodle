<?php

declare(strict_types=1);

namespace Noodle\Listener;

use ArrayObject as Context;
use League\Event\AbstractListener;
use League\Event\EventInterface;
use League\Event\EventInterface as Event;
use Noodle\State\State;
use Noodle\Stateful\Stateful;
use Noodle\Transition\Input\Input;

abstract class InvokableListener extends AbstractListener
{
    /**
     * Executes listener logic.
     *
     * @return void
     */
    abstract public function __invoke(Event $event, Stateful $object, Context $context, Input $input, State $nextState);

    /**
     * Proxy call to __invoke(...).
     */
    public function handle(EventInterface $event)
    {
        call_user_func_array($this, func_get_args());
    }
}
