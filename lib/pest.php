<?php
/**
 * Pest - PHP unit testing library
 * @author Vincent Nacar
 * @date 8-25-2016
 */

/**
 * Tester Class
 */
class Tester
{
	/**
	 * describe 
	 * @param string 
	 * print $phrase
	 * return Expector new Obj
	 */
	public static function describe($phrase){
		echo $phrase."<br />";
		return new Expector();
	}
}

/**
 * Expector Class 
 */
class Expector
{
	public function expect($func){
		$res = "";

		if (is_object($func)) {
			$res = call_user_func($func);
		}
		elseif (function_exists($func)) {
			$res = call_user_func($func);
		}
		else{
			$res = $func;
		}

		return new Comparer($res);		
	}
}

/**
 * Comparer class
 */
class Comparer
{
	public $function_result;

	public function __construct($actual_result){
		$this->function_result = $actual_result;
		echo "Actual Result: ".$actual_result;
	}
	/**
	 * toBe
	 * Compare result using '=='
	 */
	public function toBe($result){
		if ($this->function_result == $result) {
			echo "<br /> Test Done : Congrats dude, result is True <hr /> ";
		}else{
			echo "<br /> Test Done: Sorry dude, result is false <hr /> ";
		}
	}
	/**
	 * notToBe
	 * compare result using '!='
	 */
	public function notToBe($result){
		if ($this->function_result != $result) {
			echo "<br /> Test Done : Congrats dude, result is True <hr /> ";
		}else{
			echo "<br /> Test Done: Sorry dude, result is false <hr /> ";
		}		
	}

}