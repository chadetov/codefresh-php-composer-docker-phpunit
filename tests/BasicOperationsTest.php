<?php

    use Calculator\BasicOperations;

    class BasicOperationsTest extends PHPUnit_Framework_TestCase
    {
    	/**
         * @dataProvider additionDataProvider
         */
        public function testAdd($a, $b, $expected)
        {
        	$bo = new BasicOperations;
            $this->assertSame($expected, $bo->sum($a, $b));
        }

        public function additionDataProvider()
        {
            return [
                'adding zeros'  => [0, 0, 0],
                'zero plus minus one' => [0, -1, -1],
                'one plus zero' => [1, 0, 1],
                'one plus one'  => [1, 1, 2]
            ];
        }
    }

?>
