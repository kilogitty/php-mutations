<?php

namespace spec\Filters;

use Filters\IntegerFilter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IntegerFilterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(IntegerFilter::class);
    }

    function it_checks_if_input_is_an_integer() {
        $this->validate(1234)->shouldBe(true);
    }

    function it_returns_true_if_its_a_negative_integer() {
        $this->validate(-10)->shouldBe(true);
    }

    function it_returns_false_if_its_not_an_integer() {
        $this->validate("1234")->shouldBe(false);
    }

    function it_returns_false_if_its_a_float() {
        $this->validate(1.0)->shouldBe(false);
    }

    function it_returns_false_if_its_null() {
        $this->validate(null)->shouldBe(false);
    }
}
