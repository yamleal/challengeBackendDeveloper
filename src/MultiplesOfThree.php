<?php
namespace Challenge;
require '../vendor/autoload.php';

class MultiplesOfThree{
    /**
     * @param i
     * @param numberList
     */public function multiplesOfThree($i, $numberList)
    {
        $linio = $i % 3; /* Multiples of 3 */
        while (! $linio) {
            $numberList = 'Linio';
            break;
        }
        return $numberList;
    }   
}