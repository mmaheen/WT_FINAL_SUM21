<?php
	require_once 'models/db_config.php';
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$email="";
	$err_email="";
	$pass="";
	$err_pass="";
	$err_db="";
	$hasError=false;
	if(isset($_POST["sign_up"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError=true;
		}else{
			$name=$_POST["name"];
		}
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError=true;
		}else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["email"])){
			$err_email="Email Required";
			$hasError=true;
		}else{
			$email=$_POST["email"];
		}
		if(empty($_POST["pass"])){
			$err_pass="Pasword Required";
			$hasError=true;
		}else{
			$pass=$_POST["pass"];
		}
		
		if(!$hasError){
			$rs = insertUser($name,$uname,$email,$pass);
			//var_dump($rs);
			if($rs === true){
				header("Location: guest_login.php");
			}
			$err_db = $rs;
			
		}
	}
	else if (isset($_POST["btn_login"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError=true;
		}else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
			$hasError=true;
		}else{
			$pass=$_POST["pass"];
		}
		if(!$hasError){
			
			if($user = authenticateUser($_POST["uname"],$_POST["pass"])){
				session_start();
				$_SESSION["loggeduser"] = $_POST["uname"];
				//if($user["status"] == "active" && $user["type"]=="admin")
					header("Location: allcategories.php");
				//else if($user["status"] == "active" && $user["type"]=="user"){
					//header("Location: user_dashboard.php");
				//}
					
			}
			$err_db = "Username password invalid";
		}
	}

	function validateEmail($email){
		$pos_at = strpos($email,"@"); 
		$pos_dot = strpos($email,".",$pos_at); 
		if($pos_dot > $pos_at){
			return true;
		}
		return false;
	}
	
	function insertUser($name,$uname,$email,$pass){
		$query  = "insert into guest_user values (NULL,'$name','$uname','$email','$pass')";
		return execute($query);	
	}
	function authenticateUser($uname,$pass){
		$query ="select * from guest_user where username='$uname' and password='$pass'";
		$rs = get($query);
		if(count($rs)>0){
			return $rs[0];
		}
		return false;
		
	}
	function checkUsername($uname){
		$query = "select name from guest_user where username='$uname'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		else return false;
	}
	
?>