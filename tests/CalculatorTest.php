<?php

use PHPUnit\Framework\TestCase;
require __DIR__ . "/../src/Calculator.php";

class CalculatorTest extends TestCase
{
    public function testAddWillReturnTheSumOfItsParameters()
    {
        $sut = new Calculator();

        $this->assertEquals( 8, $sut->add( 5, 3) );
        $this->assertEquals( 5, $sut->add( 5, 0) );

    }
}