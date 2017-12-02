<?php
namespace Challenge;
require '../vendor/autoload.php';

class MultiplesOfFive{    
    /**
     * @param i
     * @param numberList
     */public function multiplesOfFive($i, $numberList)
    {
        $it = $i % 5; /* Multiples of 5 */
        while (! $it) {
            $numberList = 'IT';
            break;
        }
        return $numberList;
    }
}