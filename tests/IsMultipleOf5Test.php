<?php
require_once '../vendor/autoload.php';

use Challenge\MultiplesOfFive;
use PHPUnit\Framework\TestCase;

class IsMultipleOf3Test extends TestCase
{
    public function testResult()
    {
        
        for($i=1; $i<=100; $i++) {
            $it = $i % 5;
            
            
            if (! $it) { // if is multiple of 5
                
                $multiplesOfFiveObj = new MultiplesOfFive(); 
                $isIT= $multiplesOfFiveObj->multiplesOfFive($i, ""); // if function returns multiple of 5
                $this->assertEquals('IT', $isIT);
                
            }
            
        }
        
        
        
    }
}
?>