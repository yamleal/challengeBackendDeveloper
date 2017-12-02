<?php 
namespace Challenge;
require '../vendor/autoload.php';

class PrintNumbers extends Numbers{

	protected $quantity;

	public function __construct($quantity = array()) {
		$this->quantity = $quantity;
	}

	public function multiples() {
		foreach($this->quantity as $qtd) {
				
			for($i=1; $i<=$qtd->numbers; $i++) {
				$numberList = $i;
				
				$multiplesOfThreeObj = new MultiplesOfThree();
				$numberList= $multiplesOfThreeObj->multiplesOfThree($i, $numberList);
				
				$multiplesOfFiveObj = new MultiplesOfFive();
				$numberList= $multiplesOfFiveObj->multiplesOfFive($i, $numberList);
				
				$multiplesOfThreeAndFiveObj = new MultiplesOfThreeAndFive();
				$numberList= $multiplesOfThreeAndFiveObj->multiplesOfThreeAndFive($i, $numberList);
				
				$result [$i] = $numberList;
			}
		}
		return implode(", ",$result);
	}
    
	public function output() {
		return implode('', array("",$this->multiples(),""));
	}
}