# PEST
Php simple basic unit testing library

<b>basic usage:</b>

Features:
```php
  describe() // print function task or remarks
  expect($function_here) // execute function
  toBe($expected_result) // compare result using '=='
  notToBe($expected_result) // compare result using '!='
```

Sample

index.php
```php
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



```
Additional
```php
	Class Beer
	{
		public static $isdelicious = true;
		public static $substance = null;
	}
	Tester::describe("is the beer delicious?")
    	   ->expect(Beer::$isdelicious)
    	   ->toBeTruthy();
    	   
    	Tester::describe("is the sum of 1 and 2 less than 4?")
    	   ->expect(sum(1,2))->toBeLessThan(4);
    	   
    	Tester::describe("The beer substance is null")
    	   ->expect(Beer::$substance)->toBeNull();	
