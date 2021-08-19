<?php session_start();
	  include 'controllers/GuestController.php';
	  include 'main_header.php';
?>
	<script src="js/login.js"></script>
	<h1 align = "center">
		Guest Login
	</h1>
	<h5><?php echo $err_db;?></h5>
	
	<form action="" onsubmit= "return validate()" method="post">
	<table align = "center">
		<tr>
			<td>Username</td> 
			<td>
			<input type="text" id="uname" name="uname" value="<?php echo $uname;?>">
			<span id="err_uname"><?php echo $err_uname;?></span>
			<td>
		</tr>
		
		<tr>
			<td>Password</td> 
			<td>
			<input type="password" id = "pass" name="pass">
			<span id="err_pass"><?php echo $err_pass;?></span>
			</td>
		</tr>
		
		<tr>
			<td>
				<input type="submit" name="btn_login" value="Login">
			</td>
		</tr>
			
			
		
	</table>
	
	</form>
	<h4 align = "center">Not registered yet? <a href="guest_user_signup.php" > Sign Up</a></h4>
</div>

<?php include 'main_footer.php';?>