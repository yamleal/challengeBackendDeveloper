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
				
				$linio = $i % 3; /* Multiples of 3 */
				while ( ! $linio ) {
					$numberList = 'Linio';
					break;
				}
				
				$it = $i % 5; /* Multiples of 5 */
				while ( ! $it ) {
					$numberList = 'IT';
					break;
				}
				
				if (! $linio && ! $it) { /* Multiples of 5 and 3 (unique if) */
					
					$numberList = 'Linianos';
				}
				
				$result [$i] = $numberList;
			}
		}

		return implode(", ",$result);
	}

	public function output() {
		return implode('', array("",$this->multiples(),""));
	}
}
?>