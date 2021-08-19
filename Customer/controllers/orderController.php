<?php
    require_once 'Models/db_config.php';
	
	
    $name="";
	$err_name="";
    $qty="";
    $err_qty="";
	$price="";
    $err_price="";
	$err_db="";

    $hasError=false;
	

	if(isset($_POST["place_order"])){
        if(empty($_POST["name"])){
			$err_name="name Required";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
        }
        
		if(empty($_POST["qty"])){
			$err_qty="Insert quantity";
			$hasError = true;
		}
		elseif(!is_numeric($_POST["qty"])){
			$err_qty="[Quantity should contain Numeric values only]";
			$hasError = true;
		}
		
		else{
			$qty=$_POST["qty"];
        }
		if(empty($_POST["price"])){
			$err_price="Valid Id Required";
			$hasError = true;
		}
		else{
			$f_id=$_POST["price"];
		}
		
        if(!$hasError){
			$rs=placeOrders($_POST["name"],$_POST["qty"],$_POST["price"]);
			if($rs===true){
				header("Location: all_orders.php");
			}
			$err_db= $rs;
			
		}
		else if (isset ($_POST["customize_order"])){
			if(empty($_POST["name"])){
				$err_name="name Required";
				$hasError = true;
			}
			else{
				$name=$_POST["name"];
			}
			
			if(empty($_POST["qty"])){
				$err_qty="Insert quantity";
				$hasError = true;
			}
			elseif(!is_numeric($_POST["qty"])){
				$err_qty="[Quantity should contain Numeric values only]";
				$hasError = true;
			}
			else{
				$qty=$_POST["qty"];
			}
			if(empty($_POST["price"])){
				$err_price="Valid Id Required";
				$hasError = true;
			}
			else{
				$f_id=$_POST["price"];
			}
			if(!$hasError){
				
				$rs=updateOrders($_POST["name"],$id,$_POST["price"],$_POST["qty"]);
				if($rs===true){
					header("Location: all_orders.php");
				}
				$err_db= $rs;
			}
			
	
		}
		else if (isset ($_POST["delete_orders"])){
			if(empty($_POST["name"])){
				$err_name="name Required";
				$hasError = true;
			}
			else{
				$name=$_POST["name"];
			}
			if(!$hasError){
				
				$rs=deleteOrders($_POST["id"]);
				if($rs===true){
					header("Location: all_orders.php");
				}
				$err_db= $rs;
			}
		}
	}

    function placeOrders($name,$qty,$price){
		$query= "insert into orders values (NULL,$price,'$name',$qty)";
		echo $query;
		return execute($query);	
	}
    function getAllOrders(){
		$query= "select o.*,p.name as 'p_name' from orders o left join products p on p.id = o.p_id ";
        $rs = get($query);
		return $rs;	
	}

    function getOrders($id){
		$query= "select * from orders where id=$id";
        $rs = get($query);
		return $rs[0];	
	}
	function updateOrders($name,$qty,$price,$id){
		$query= "update orders set name='$name', price=$price, qty=$qty where id=$id";
		return execute($query);
	}
	function deleteOrders($id){
		$query= "delete from orders where id=$id";
		return execute($query);
	}
	function search($key){
		$query= "select o.id,o.name from orders o left join products p on p.id = o.p_id where o.name like '%$key%' or p.name like '%$key%'";
		$rs = get($query);
		return $rs;
	}
?>