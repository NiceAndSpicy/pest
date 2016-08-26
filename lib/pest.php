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
		elseif (is_bool($func)){
			$res = $func;
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
define("_msgtrue_", "<br /> Test Done : Congrats dude, result is True <hr /> ");
define("_msgfalse_","<br /> Test Done: Sorry dude, result is false <hr />");

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
			echo _msgtrue_;
		}else{
			echo _msgfalse_;
		}
	}
	/**
	 * notToBe
	 * compare result using '!='
	 */
	public function notToBe($result){
		if ($this->function_result != $result) {
			echo _msgtrue_;
		}else{
			echo _msgtrue_;
		}		
	}

	/**
	 * toBeTruthy
	 */
	public function toBeTruthy(){
		if ($this->function_result) {
			echo _msgtrue_;
		} else { echo _msgfalse_; }
	}
	/**
	 * toBeFalsy
	 */
	public function toBeFalsy(){
		if (!$this->function_result) {
			echo _msgtrue_;
		} else { echo _msgfalse_; }
	}
	/**
	 * toContain
	 * @param string
	 */
	public function toContain($val){
		// shit
	}

	/**
	 * toBeNull
	 */
	public function toBeNull(){
		if (is_null($this->function_result)) {
			echo _msgtrue_;
		} else { echo _msgfalse_; }
	}

	/**
	 * toBeLessThan
	 */
	public function toBeLessThan($num){
		if ($this->function_result < $num) {
			echo _msgtrue_;
		} else { echo _msgfalse_; }
	}

	/**
	 * toBeGreaterThan
	 */
	public function toBeGreaterThan($num){
		if ($this->function_result > $num) {
			echo _msgtrue_;
		} else { echo _msgfalse_; }
	}

}