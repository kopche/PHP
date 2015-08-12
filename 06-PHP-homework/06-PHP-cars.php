<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <title>Задача 1</title>
</head>
<body>

<?php
	$cars_array = array("volvo", "porshe", "mercedes", "wv","BMV","Lada");
	
	$size = count($cars_array);
	for($i = 0; $i < $size; $i++){
		echo "<p>Искам да си купя " . $cars_array[$i] . "!</p>";
	}

    echo "----------------------<br />";
	
	$cars[] = array_pop($cars_array);
	
	//print_r($cars_array);
	
	foreach ($cars_array as $v) {
		echo "<p>Ще си купя " . $v . "!</p>";
		}
		
	
	// яко получи се :)
	
?>

</body>
</html>