<?php

namespace spec\Filters;

use Filters\ArrayFilter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArrayFilterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ArrayFilter::class);
    }

    function it_checks_if_input_is_an_array() {
        $this->validate([])->shouldBe(true);
    }

    function it_returns_false_if_its_not_an_array() {
        $this->validate(1234)->shouldBe(false);
    }

    function it_returns_false_if_its_an_object() {
        $this->validate((object) [])->shouldBe(false);
    }

    function it_returns_false_if_its_null() {
        $this->validate(null)->shouldBe(false);
    }
}
