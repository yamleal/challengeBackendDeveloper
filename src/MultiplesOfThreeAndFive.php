<?php
namespace Challenge;
require '../vendor/autoload.php';

class MultiplesOfThreeAndFive{
    /**
     * @param i
     * @param numberList
     */public function multiplesOfThreeAndFive($i, $numberList)
    {
        $linio = $i % 3; /* Multiples of 3 */
        $it = $i % 5; /* Multiples of 5 */
        
        if (! $linio && ! $it) { /* Multiples of 3 and 5 (unique if) */
            $numberList = 'Linianos';
        }
        return $numberList;
    }
}