<?php

declare(strict_types=1);

namespace Noodle\Statemachine\Exception;

use ArrayObject as Context;
use Exception;
use Noodle\State\FlyweightState;
use Noodle\TestAsset\StatefulObject;
use Noodle\Transition\Input\FlyweightInput;
use PHPUnit\Framework\TestCase;

class StateTransitionFailedTest extends TestCase
{
    public function testAdditionalExceptionPropertiesAreAccessibleViaGeters()
    {
        $input = FlyweightInput::named('BAR');
        $object = new StatefulObject();
        $object->setCurrentState(FlyweightState::named('FOO'));

        $context = new Context();
        $nextState = FlyweightState::named('FOOBAR');
        $previous = new Exception();

        $exception = new StateTransitionFailed($input, $object, $context, $nextState, $previous);

        $this->assertSame($input, $exception->getInput());
        $this->assertSame($object, $exception->getObject());
        $this->assertSame($context, $exception->getContext());
        $this->assertSame($nextState, $exception->getNextState());
        $this->assertSame($previous, $exception->getPrevious());
    }
}
