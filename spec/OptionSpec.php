<?php

namespace spec;

use Option;
use PhpSpec\ObjectBehavior;

class OptionSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Option::class);
    }

    public function it_can_be_constructed_through_create()
    {
        $this->beConstructedThrough('create', ['foo']);
        $this->shouldBeAnInstanceOf(Option::class);
    }
}
