<?php
require_once '../vendor/autoload.php';

use Challenge\MultiplesOfThreeAndFive;
use PHPUnit\Framework\TestCase;

class IsMultipleOf3Test extends TestCase
{
    public function testResult()
    {
        
        for($i=1; $i<=100; $i++) {
            $linio = $i % 3; /* Multiples of 3 */
            $it = $i % 5; /* Multiples of 5 */
            
            
            if (! $linio && ! $it) { // if is multiple of 3 and 5
                
                $multiplesOfThreeAndFiveObj = new MultiplesOfThreeAndFive();
                $isLinianos= $multiplesOfThreeAndFiveObj->multiplesOfThreeAndFive($i, ""); //if function returns multiple of 3 and 5
                $this->assertEquals('Linianos', $isLinianos);
                
            }
            
        }
        
        
        
    }
}
?>