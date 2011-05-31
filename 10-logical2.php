<html>
	<head>
		<title>Logical Expressions: Switch</title>
	</head>
	<body>
		<?php 
			/*	switch
			Useful when there are many possible actions based on the value of single variable
			*/
			
			$a = 4;
			switch ($a) {
				case 0: 
					echo "a equals 0";
					break;
				case 1: 
					echo "a equals 1";
				case 2: 
					echo "or a equals 2";
					break;
				default:
					echo "a is not 0, 1, or 2";
					break;
			}
			
			echo "<br />";
			$state = "Selangor";
			switch($state) {
				case "Selangor":
					echo "Shah Alam";
				break;
				case "Pahang":
					echo "Kuantan";
				break;
				case "Sabah":
					echo "Kota Kinabalu";
				break;
				case "Sarawak":
					echo "Kuching";
				break;
			}
			
		?>
	</body>
</html>