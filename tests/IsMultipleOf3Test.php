<?php
require_once '../vendor/autoload.php';

use Challenge\MultiplesOfThree;
use PHPUnit\Framework\TestCase;

class IsMultipleOf3Test extends TestCase
{
    public function testResult()
    {
        for ($i = 1; $i <= 100; $i ++) {
            $linio = $i % 3;
            
            if (! $linio) { // if is multiple of 3
                
                $multiplesOfThreeObj = new MultiplesOfThree();
                $isLinio = $multiplesOfThreeObj->multiplesOfThree($i, ""); // if function returns multiple of 3
                $this->assertEquals('Linio', $isLinio);
            }
        }
    }
}