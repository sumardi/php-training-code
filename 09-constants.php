<html>
	<head>
		<title>Constants</title>
	</head>
	<body>
		<?php
			/*	
				1. Constants can't change their values after being defined
				2. Constant names use all capital letters and no dollar sign
			*/
			
			// Assignment to a variable
			$max_width = 109;
			
			// Assignment to a constant
			define("MAX_WIDTH", 109);
			
			// Referencing the value of a constant
			echo MAX_WIDTH; echo "<br />";
			
			// Trying to change a constant will give an error:
			// MAX_WIDTH += 1;
			
			// But changing a variable will not.
			$max_width += 1;
			echo $max_width;
		?>
	</body>
</html>