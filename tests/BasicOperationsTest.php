<?php

    require_once __DIR__ . '/../vendor/autoload.php';

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

        /**
         * @dataProvider multiplyDataProvider
         */
        public function testMultiply($a, $b, $expected)
        {
            $bo = new BasicOperations;
             $this->assertSame($expected, $bo->multiply($a, $b));
        }

        public function multiplyDataProvider()
        {
            return [
                'adding zeros'  => [0, 0, 0],
                'zero plus minus one' => [0, -1, 0],
                'one plus zero' => [1, 0, 0],
                'one plus one'  => [1, 1, 1],
                'ten by minus ten'  => [10, -10, -100],
            ];
        }
    }

?>
