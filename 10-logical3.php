<html>
	<head>
		<title>Logical Expressions: Ternary operator</title>
	</head>
	<body>
		<?php 
		/* ternary operator
		   the only operator to take three operands
		   
		   (expression) ? true : false 
		*/
		$c = 10;
		
		
		echo ($c > 1) ? "c is larger than 1" : "c is smaller than 1";  
		echo "<br />";
		
		echo isset($d) ? "d is set" : "d is not set";
		echo "<br />";
		
		$d = isset($d) ? $d : 100;
		echo $d;
		?>
	</body>
</html>