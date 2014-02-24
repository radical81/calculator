<?php
class Calculator
{
        /**
     * @assert (0, 0) == 0
     * @assert (0, 1) == 1
     * @assert (1, 0) == 1
     * @assert (1, 1) == 2
     * @assert (1, 2) == 4
     */
    public function add($a, $b)
    {
        return $a + $b;
    }
    
    public function subtract($a, $b) {
        return $a - $b;
    }
    
    public function divide($a,$b) {
        if($b == 0) {
            throw new Exception('Cannot divide by zero!');
        }
        return $a/$b;
    }
}
?>