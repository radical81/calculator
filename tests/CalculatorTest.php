<?php

require_once dirname(__FILE__) . '/../Calculator.php';

/**
 * Test class for Calculator.
 * Generated by PHPUnit on 2012-04-25 at 07:44:01.
 */
class CalculatorTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Calculator
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Calculator;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * Generated from @assert (0, 0) == 0.
     *
     * @covers Calculator::add
     */
    public function testAdd() {
        $this->assertEquals(
                0, $this->object->add(0, 0)
        );
    }

    /**
     * Generated from @assert (0, 1) == 1.
     *
     * @covers Calculator::add
     */
    public function testAdd2() {
        $this->assertEquals(
                1, $this->object->add(0, 1)
        );
    }

    /**
     * Generated from @assert (1, 0) == 1.
     *
     * @covers Calculator::add
     */
    public function testAdd3() {
        $this->assertEquals(
                1, $this->object->add(1, 0)
        );
    }

    /**
     * Generated from @assert (1, 1) == 2.
     *
     * @covers Calculator::add
     */
    public function testAdd4() {
        $this->assertEquals(
                2, $this->object->add(1, 1)
        );
    }

    /**
     * Generated from @assert (1, 2) == 4.
     *
     * @covers Calculator::add
     */
    public function testAdd5() {
        $this->assertEquals(
                4, $this->object->add(2, 2)
        );
    }
    
    public function testDivide2By1_return2() {
        $this->assertEquals(2, $this->object->divide(2,1));
    }
    
    public function testDivideTwoByZero_shouldThrowException() {
        try {
            $this->object->divide(2,0);            
        } catch (Exception $e) {
            $this->assertEquals('Cannot divide by zero!', $e->getMessage());
            return;
        }
        $this->fail('An expected exception has not been raised.');
    }

    public function testDivide2By2_shouldReturn1_shouldNotThrowException() {
        try {
            $this->assertEquals(1,$this->object->divide(2,2));            
        } catch(Exception $e) {
            $this->fail('Should not throw exception!');
        }
    }
    
    public function testSubstract2Minus1_shouldReturn1() {
        $this->assertEquals(1,$this->object->subtract(2, 1));
    }
    
    public function testSubstract2Minus2_shouldReturn0() {
        $this->assertEquals(0,$this->object->subtract(2, 2));
    }    
}

?>
