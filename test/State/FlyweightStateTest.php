<?php

declare(strict_types=1);

namespace Noodle\State;

use PHPUnit\Framework\TestCase;

class FlyweightStateTest extends TestCase
{
    public function testCreatesNamedStates()
    {
        $this->assertContains(CreatesWithName::class, class_implements(FlyweightState::class));

        $name = 'FOO';
        $state = FlyweightState::named($name);

        $this->assertInstanceOf(State::class, $state);
        $this->assertSame($name, $state->getName());
    }

    public function testReusesExistingStates()
    {
        $name = 'FOO';

        $this->assertSame(
            FlyweightState::named($name),
            FlyweightState::named($name)
        );
    }

    /**
     * @runInSeparateProcess
     */
    public function testWildcardAnyInputIsFortyCharHexString()
    {
        $this->assertMatchesRegularExpression(
            '/^[0-9a-f]{40}$/',
            FlyweightState::any()->getName(),
            'Expected 40 lowercase hexadecimal characters'
        );
    }
}
