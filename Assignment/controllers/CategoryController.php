<?php
	include 'models/db_config.php';
	$db_err="";
	if(isset ($_POST["add_category"])){
		//val
		$rs= insertCategory($_POST ["name"]);
		if($rs===true)
		{
			header ("Location : allcategories.php");
		}
		$db_err=$rs;
		
	}
	function insertCategory($name)
	{
		$query= "insert into categories values (NULL,'$name')";
		return execute($query);
	}
 ?>