<?php
	include 'models/db_config.php';
	$db_err="";
	if(isset ($_POST["add_department"])){
		//val
		$rs= insertDepartment($_POST ["name"]);
		if($rs===true)
		{
			header ("Location : department.php");
		}
		$db_err=$rs;
		
	}
	function insertDepartment($name)
	{
		$query= "insert into department values (NULL,'$name')";
		return execute($query);
	}
	
	function getAllDepartment(){
		$query="select * from department";
		$rs= get($query);
		return $rs;
	
	
	}
	
 ?>