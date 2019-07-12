<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Utils\Calculator;

class CalculatorTest extends TestCase
    {
        public function testAdd()
        {
            //Using Class method
            $calculator = new Calculator();
            $result = $calculator->add(30, 12);
    
            // assert that your calculator added the numbers correctly!
            $this->assertEquals(42, $result);
        }
        //Using method
        public function add($a, $b)
        {
            return $a + $b;
        }
    }