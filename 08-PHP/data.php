<?PHP
/*if (isset($_POST)["submit"])
{$name = strip_tags(S_POST["name"],'<br>');
$name = trim($name);
$name = htmlspecialchars($name)}това са примери*/
//$names = $_GET['name'];


/*echo "<pre>";
var_dump($_GET);
echo "</pre>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";*/

	function isValid($name)
	{
		if(mb_strlen($name, "UTF-8") >3){
			return true;
		}
		return false;
	}
	if (count($_POST)>0)
	{
		$name = $_POST["name"];
		
		$name = strip_tags($name,'');
		$name = trim($name);
		$name = htmlspecialchars($name);
		?>
		<textarea><?=$name?></textarea>
		<?php
		
		
	if (isValid($name))
	{
		echo "<div><strong>Успешна регистрация!</strong></div>";
	}
	else 
	{
		echo "<div><strong>Невалидна информация! Моля, Опитайте пак</strong></div>";
	}	
}

//echo "$_GET <pre>".print_r($_GET, true)."</pre>\n<br/>";

//echo "$POST<pre>".print_r($_POST, true)."</pre>\n<br/>";
?>