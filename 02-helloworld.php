<html>
	<head>
		<title>Hello World</title>
	</head>
	
	<body>
		<!-- html comment -->
		
		<?php 
		// single line comment
		
		/* multi-line
			comment */
		?>
		
		<h1>Examples</h1>
		<?php 
			echo "Hello World"; 
			// The semicolon at the end of the statement is important!
		?><br />
		<?php
			print "Hello World";
			// print works like echo
		?><br />
		<?php
			// concatenation
			echo "Hello " . " World<br />";
			
			// simple math
			echo 5 + 4;
		?>
	</body>
</html>