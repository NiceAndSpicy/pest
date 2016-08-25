<?php

	require "lib/pest.php";

	// function to be tested
	function sum($a,$b){
		return $a + $b;
	}

	function is_girl($sex){
		if ($sex=="b") {
			return "Boy";
		}elseif ($sex=="g") {
			return "Girl";
		}
	}

	/**
	 * Lest start
	 */
	Tester::describe("calculate the sum of 1 and 2")
		   ->expect(sum(1,2))
		   ->toBe(3);

    Tester::describe("check if the gender given is not a Girl")
    	   ->expect(is_girl("b"))
    	   ->notToBe("Girl");


