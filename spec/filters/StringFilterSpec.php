<?php

namespace spec\Filters;

use Filters\StringFilter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringFilterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(StringFilter::class);
    }

    function it_checks_if_input_is_a_string() {
        $this->validate("teststring")->shouldBe(true);
    }

    function it_returns_true_if_its_an_emptry_string() {
        $this->validate("")->shouldBe(true);
    }

    function it_returns_false_if_its_not_a_string() {
        $this->validate(1234)->shouldBe(false);
    }

    function it_returns_false_if_its_null() {
        $this->validate(null)->shouldBe(false);
    }
}
