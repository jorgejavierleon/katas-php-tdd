<?php
namespace Test;

use PHPunit\Framework\TestCase;
use Kata\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    private $fizzBuzz;

    protected function setUp()
    {
        $this->fizzBuzz = new FizzBuzz;
    }

    /**
     * @test
     */
    public function it_is_instatiable()
    {
        $this->assertInstanceOf(FizzBuzz::class, $this->fizzBuzz);
    }

    /**
     * @test
     */
    public function it_convert_1_to_fizzbuzz()
    {
        $this->assertEquals($this->fizzBuzz->convert(1), 1);
    }

    /**
     * @test
     */
    public function it_convert_2_to_fizzbuzz()
    {
        $this->assertEquals($this->fizzBuzz->convert(2), 2);
    }

    /**
     * @test
     */
    public function it_convert_3_to_fizzbuzz()
    {
        $this->assertEquals($this->fizzBuzz->convert(3), 'fizz');
    }

    /**
     * @test
     */
    public function it_convert_5_to_fizzbuzz()
    {
        $this->assertEquals($this->fizzBuzz->convert(5), 'buzz');
    }

    /**
     * @test
     */
    public function it_convert_6_to_fizzbuzz()
    {
        $this->assertEquals($this->fizzBuzz->convert(6), 'fizz');
    }

    /**
     * @test
     */
    public function it_convert_15_to_fizzbuzz()
    {
        $this->assertEquals($this->fizzBuzz->convert(15), 'fizzbuzz');
    }
}

