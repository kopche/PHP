<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <title>Задача 2 от 30.7</title>
</head>
<body>

<?php

	$firm = array(	
		"HP" => "http://www.hp.com",
		"canon" => "www.canon.bg",
		"kycera" => "www.kyocera.eu",
		"lexmark" => "https://www.lexmark.com",
		"toshiba" => "www.toshiba.bg");
	//shuffle($firm);
	foreach($firm as $key => $value){
	   echo "<a href='$value'>".$key."</a><br>";
	}
?>

</body>
</html>
