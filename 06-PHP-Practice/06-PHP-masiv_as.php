<?php
$userarr = Array (
'username' => 'kopche',
'name' => 'Силвия');

/*echo "<dt> Име: </dt>";
echo "<dd>".$userarr['name']." </dd>";

echo "<dt> потребител: </dt>";
echo "<dd>".$userarr['username']." </dd>";*/

foreach($userarr as $key => $value){
	echo $key." ".$value."<br>";
}


?>