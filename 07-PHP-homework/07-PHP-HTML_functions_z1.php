<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <title>Задача 1 от 4.8</title>
	<style>
#green {
    background-color: #99FF99;
}
#red {
    background-color: red;
}
#blue {
    background-color: blue;
}
</style>
</head>
<body>

<?php
require_once "07-PHP-functions_z1.php";
$a = rand(1,40);
$ha = rand (2,35);

		echo "<br/>";
	echo("Стойността на променливата a = $a<br>");
	echo("Стойността на променливата ha = $ha<br>");
	
			if (multiply($a,$ha) <= 30) 
		{ ?>
			<div id="green">
			<?php echo "Лицето на триъгълника е:(a x ha)/2 = " . multiply($a,$ha)." " ."кв.см.";} ?>
			<br></div>
	<?php if (multiply($a,$ha) >= 31 && multiply($a,$ha) <= 60) 
		{ ?>
			<div id="red">
		<?php echo "Лицето на триъгълника е:(a x ha)/2 = " . multiply($a,$ha)." " ."кв.см.";}?> 
			<br></div>
	<?php 	  
	  	  if (multiply($a,$ha) >= 61)
		 { ?>
			<div id="blue">
		 <?php echo "Лицето на триъгълника е:(a x ha)/2 = " . multiply($a,$ha)." " ."кв.см.";}?> 
			</div>
</body>
</html>