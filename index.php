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

	Class Beer
	{
		public static $isdelicious = true;
		public static $substance = null;
	}
	/**
	 * Lets start
	 */
	Tester::describe("calculate the sum of 1 and 2")
		   ->expect(sum(1,2))
		   ->toBe(3);

	Tester::describe("to be the function equal to 'Hello' ")
		   ->expect(function(){
		   		return "Hello";
		   })->toBe("Hello");

    Tester::describe("check if the gender given is not a Girl")
    	   ->expect(is_girl("b"))
    	   ->notToBe("Girl");

    Tester::describe("is the beer delicious?")
    	   ->expect(Beer::$isdelicious)
    	   ->toBeTruthy();

    Tester::describe("is the sum of 1 and 2 less than 4?")
    	   ->expect(sum(1,2))->toBeLessThan(4);

    Tester::describe("The beer substance is null")
    	   ->expect(Beer::$substance)->toBeNull();