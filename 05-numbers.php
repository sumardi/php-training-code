<html>
	<head>
		<title>Numbers</title>
	</head>
	<body>
		<?php
			$var1 = 12;
			$var2 = 4;
		?>
		
		Basic Math: <?php echo ((18 + 20 + $var1) * $var2) / 9 - 2; ?><br />
		<br />
		
		<?php 
			// assignment with operation
		?>
		Addition: <?php $var2 += 4; echo $var2; 
					// is the same as $var2 = $var2 + 4 
				  ?><br />
		Substraction: <?php $var2 -= 4; echo $var2; ?><br />
		Multiplication: <?php $var2 *= 3; echo $var2; ?><br />
		Division: <?php $var2 /= 2; echo $var2; ?><br />
		Modulus: <?php $var2 %= 2; echo $var2; ?><br />
		<br />
		
		Increment: <?php $var2++; echo $var2; ?><br />
		Decrement: <?php $var2--; echo $var2; ?><br />
		
	</body>
</html>