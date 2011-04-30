<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>
		<? /*
			An array in PHP is actually an ordered map. A map is a type that maps values to keys. This type is optimized in several ways, so you can use it as a real array, or a list (vector), hashtable (which is an implementation of a map), dictionary, collection, stack, queue and probably more. Because you can have another PHP array as a value, you can also quite easily simulate trees.
		*/?>
		
		<?php 
			// defining a simple array
			$array1 = array(4,8,15,16,23,42);
			
			// referencing an array value by its index
			echo $array1[0];
			echo $array1[4];
		
			// arrays can contain a mix of strings, numbers, even other arrays
			$array2 = array(6,
							"fox", 
							"cat", 
							array(	"x", 
									"y", 
									"z")
							);
			
			// referencing an array value that is inside another array
			echo $array2[3][1];
		?>
		<br />
		<?php
			// Changing values in an array that has already been defined
			// It's just like variables but you use the index to reference the array position
			$array2[3] = "tiger";
			echo $array2[3];
		?>
		<br />
		<?php
			// You can also assign labels to each pocket (called "keys"),
			$array3 = array("first_name" => "Kate", "last_name" => "Middleton");
		
			// which will allow you to use the key to reference the value in that array position.
			echo $array3["first_name"] . " " . $array3["last_name"] . "<br />";
			$array3["first_name"] = "Pippa";
			echo $array3["first_name"] . " " . $array3["last_name"] . "<br />";
		?>
		<br />
		A good way to see the values inside an array during development:<br />
		<pre><?php print_r($array2); ?></pre>
	</body>
</html>