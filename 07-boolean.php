<html>
	<head>
		<title>Booleans and NULL</title>
	</head>
	<body>
		<?php
			/*	Booleans are used to represent the concepts of true and false.
				They are most often used for testing if a statement is true or false and 
				they'll play a bigger role when we discuss logical expressions.
			*/
			$bool1 = true;
			$bool2 = false;
			
			// When booleans are displayed, PHP will attempt to convert them into a string
			// You'll get either "1"/"0" or "1"/"" instead of true/false
		?>
		Value of $bool1: <?php echo $bool1; ?><br />
		Value of $bool2: <?php echo $bool2; ?><br />
		<br />
		<?php
			/*	NULL is used to represent the concept of nothing or the state of being empty */
			$var1 = 3;
			$var2 = "keyboard";
			$var4 = NULL;
			
			// isset tests whether a variable has been set
			// It returns true or false as a result of the test.
		?>
		$var1 is set: <?php echo isset($var1); ?><br />
		$var2 is set: <?php echo isset($var2); ?><br />
		$var3 is set: <?php echo isset($var3); ?><br />
		<?php unset($var1); ?>
		$var1 is set: <?php echo isset($var1); ?><br />
		$var2 is set: <?php echo isset($var2); ?><br />
		$var3 is set: <?php echo isset($var3); ?><br />
		<br />
		<?php 
			// empty test whether a variable is empty (null, 0, array(), "") 
		?>
		$var1 empty: <?php echo empty($var1); ?><br />
		$var4 empty: <?php echo empty($var4); ?><br />
	</body>
</html>