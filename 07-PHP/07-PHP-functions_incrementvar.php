<?php
function incrementvar()
{ 
	static $count = 1;
	
	$count*= 3;
	
	echo $count;
}
?>