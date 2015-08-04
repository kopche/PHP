<?php
/*$first_arr = array();

$first_arr[] = "плуване";
$first_arr [] = "филми";
$first_arr [] = "ра";

echo "<p>" . $array[0] . "</p>";
*/
/*
$arr =array ("proba", "dfsfs", "fdsf");
echo "<p>" . $arr[0] . "</p>";
echo "<p>" . $arr[1] . "</p>";
echo "<p>" . $arr[2] . "</p>";
*/

$first_arr = array();

$first_arr[] = "плуване";
$first_arr[] = "филми";
$first_arr[] = "ра";
$first_arr[] = "бягство";



/*
echo "<p>" . $first_arr[3] . "</p>";
echo "<p>" . $first_arr[4] . "</p>";
echo "<p>" . $first_arr[7] . "</p>";
echo "<p>" . $first_arr[8] . "</p>";*/

//unset ($first_arr[8]);//премахване на елемент//

//var_dump ($first_arr);

$size = count($first_arr);

for ($i= 0; $i < $size; $i++) 
{
	echo "ще правя   ".$first_arr[$i]."<br />";
}
?>