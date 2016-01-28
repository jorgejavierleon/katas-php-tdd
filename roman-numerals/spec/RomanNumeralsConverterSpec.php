<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralsConverterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('RomanNumeralsConverter');
    }

    function it_should_return_empty_for_zero()
    {
         $this->convert(0)->shouldReturn('');
    }

    function it_should_encode_1_to_i()
    {
         $this->convert(1)->shouldReturn('I');
    }

    function it_should_encode_2_to_ii()
    {
         $this->convert(2)->shouldReturn('II');
    }

    function it_should_encode_4()
    {
         $this->convert(4)->shouldReturn('IV');
    }

    function it_should_encode_5()
    {
         $this->convert(5)->shouldReturn('V');
    }

    function it_should_encode_6()
    {
         $this->convert(6)->shouldReturn('VI');
    }

    function it_should_encode_9()
    {
         $this->convert(9)->shouldReturn('IX');
    }

    function it_should_encode_10()
    {
         $this->convert(10)->shouldReturn('X');
    }

    function it_should_encode_11()
    {
         $this->convert(11)->shouldReturn('XI');
    }

    function it_should_encode_20()
    {
         $this->convert(20)->shouldReturn('XX');
    }

    function it_should_encode_50()
    {
         $this->convert(50)->shouldReturn('L');
    }

    function it_should_encode_72()
    {
         $this->convert(72)->shouldReturn('LXXII');
    }

    function it_should_encode_100()
    {
         $this->convert(100)->shouldReturn('C');
    }
}

