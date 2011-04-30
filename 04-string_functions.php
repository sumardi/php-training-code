<html>
	<head>
		<title>String Functions</title>
	</head>
	<body>

		<?php
			$firstString = "Five or six jet planes";
			$secondString = " zoomed quickly by the new tower.";

			// Concatentation
			$thirdString = $firstString;
			$thirdString .= $secondString;
			echo $thirdString;
		?>
		
		<br />
		Lowercase: <?php echo strtolower($thirdString); ?><br />
		Uppercase: <?php echo strtoupper($thirdString); ?><br />
		Uppercase first-letter: <?php echo ucfirst($thirdString); ?><br />
		Uppercase words: <?php echo ucwords($thirdString); ?><br />
		
		<br />
		Length: <?php echo strlen($thirdString); ?><br />
		Trim: <?php echo $fourthString = $firstString . trim($secondString); ?><br />
		Find: <?php echo strstr($thirdString, "six"); ?><br />
		Replace by string: <?php echo str_replace("quickly", "fastly", $thirdString); ?><br />
		Sub-string: <?php echo substr($thirdString, 0, 11); ?><br />
	</body>
</html>