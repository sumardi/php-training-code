<html>
	<head>
		<title>Numbers: Floating Point Numbers</title>
	</head>
	<body>
		<?php 
			// Floating Point Numbers (floats) are "numbers with a decimal"
			$var1 = 3.142;
			
			// Floats can occur when two numbers don't divide evenly
			echo 4/3;
		?>
		
		Floating point: <?php echo $i = 3.142; ?><br />
		Round: <?php echo round($i, 1); ?><br />
		Ceiling: <?php echo ceil($i); ?><br />
		Floor: <?php echo floor($i); ?><br />
		
	</body>
</html>