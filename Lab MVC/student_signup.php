<?php 
	include 'main_header.php';
	include 'controllers/student_controller.php';
?>
<h1>
	Student Sign Up
</h1>

<form action= "" method= "post">
	<table>
	
		<tr>
			<td>
				Name
			</td>
			
			<td>
				<input type ="text" name = "name" value ="<?php echo $name; ?>">
				<span>
					<?php echo $err_name; ?>
				</span>
				<span>
					<?php echo $err_db; ?>
				</span>
			</td>
		</tr>
		
		<tr>
			<td>
				Date of Birth
			</td>
			
			<td>
				<input type ="text" name = "dob" value ="<?php echo $dob; ?>">
				<span>
					<?php echo $err_dob; ?>
				</span>
			</td>
		</tr>
		
		<tr>
			<td>
				Credit
			</td>
			
			<td>
				<input type ="text" name = "credit" value ="<?php echo $credit;?>">
				<span>
					<?php echo $err_credit; ?>
				</span>
			</td>
		</tr>
		
		<tr>
			<td>
				CGPA
			</td>
			
			<td>
				<input type ="text" name = "cgpa">
				<span>
					<?php echo $err_cgpa ;?>
				</span>
			</td>
		</tr>
		
		<tr>
			<td>
				Department Id
			</td>
			
			<td>
				<input type ="text" name = "dept_id"><br>
			</td>
		</tr>
		
		<tr>
			<td>
				
			</td>
			
			<td>
				<input type ="submit" value= "Sign Up" name = "sign_up"><br>
			</td>
		</tr>
	</table>
</form>
<?php 
	include 'main_footer.php';
?>