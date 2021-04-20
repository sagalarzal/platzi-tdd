<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddWillReturnTheSumOfItsParameters()
    {
        $sut = new Calculator();

        $this->assertEquals( 8, $sut->add( 5, 3) );

    }
}