<html>
	<head>
		<title>Logical Expressions</title>
	</head>
	<body>
		<?php 
			/*	if-statements

			if (expression)
				statement;

			1. does NOT require semicolons except after statements
			2. {} go around multi-line if-statements
			3. {} are optional for single-line if-statments but I strongly suggest them
			4. expressions always evaluate to a boolean value (true/false)
			5. expressions can use comparison operators (==, !=, >, <, >=, <=, ===, !==)
			
			*/ 
		?>
		
		<?php
			$a = 4;
			$b = 4;
			if ($a > $b) {
				echo "a is larger than b";
			} elseif ($a == $b) {	// if 1st expression is false, elseif performs a 2nd test
				echo "a equals b";
			} else {				// if all expressions are false, else gives an alternative statement
				echo "a is smaller than b";
			}
		?>
		
		<br />
		<?php
			// Using logical operators to combine expressions
			// && is a logical AND
			// || is a logical OR
			
			$c = 1;
			$d = 5;
			if (($a > $b) && ($c > $d)) {
				echo "a is larger than b AND ";
				echo "c is larger than d";
			}
			
			if (($a > $b) || ($c > $d)) {
				echo "a is larger than b OR c is larger than d";
			} else {
				echo "neither a is larger than b or c is larger than d";
			}
		?>
		
		<br />
		<?php
			// symbol ! is a logical NOT 
			unset($a);
			if (!isset($a)) {
				$a = 100;
			}
			echo $a;
		?>
		
		<br />
		<?php
			// Use a logical test to determine if a type should be set
			if (is_int($a)) {
				echo "Variable a is an integer";
			} else {
				echo "Variable a is not an integer";
			}
		?>
	
		<br />
		<?php
		
		// Nested if-statements
		$x = 10;
		$y = 2;
		if($x > 0) {
			if($y == $x) {
				echo "y equals x";
			} else {
				echo "y is not equal to x";
			}
		} else {
			echo "x is less than zero";
		}
		
		?>
	</body>
</html>