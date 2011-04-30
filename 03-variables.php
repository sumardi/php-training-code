<html>
	<head>
		<title>Variables</title>
	</head>
	
	<body>
		<?php
			/* 1) starts with a $ (dollar-sign). 
			   2) followed by a letter or underscore
			   3) can contains letters, numbers, underscore or dashes but no spaces.
			   4) case sensitive */
			   
			$var1 = 100;
			echo $var1;
			$VAR1 = TRUE;
			$Var1 = "Cat";
			
			// $my_variable and $my_Variable are different
			$my_variable = "Hello World";
			$my_Variable = "Hello World Again";
			echo $my_Variable . "<br />";
		?>
		
		<?php
			// variables values are variable; $var1 can be assigned a new value
			$var1 = 200;
			echo $var2;
	</body>
</html>