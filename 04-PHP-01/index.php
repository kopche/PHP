<?php
	$my_name = "Силвия";
	
	echo "<br/>";
	$my_family = "Терзиева";
    $space=" ";
	echo $my_name.$space.$my_family;
	echo "<br/>";
	echo "<br/>";
	$day0Month = 25;
	
	if ($day0Month <= 25 || $day0Month == 23)
	{
		echo "Заплатата е далече";
	} 
	else
	{ 
		echo "Има заплата";
	}
	echo "<br/>";
	echo "<br/>";
	
    $a = 8;
	$b = 22;
		
	$c = $a + $b;
	echo $c;
	echo "<br>";
	
	$c = $a - $b;
	echo $c;
	echo "<br>";
	
?>