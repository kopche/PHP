<?php
function printheader($title = null)
{ 
	global $default_header;
	if(!isset($title))
	{

		$title = $default_header;
	}
	echo $title;
}
?>