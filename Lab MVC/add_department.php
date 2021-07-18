<?php include 'main_header.php';
	include 'controllers/department_controller.php';
?>
<h5>
	<?php echo $db_err; ?>
</h5>
<form>
	name
	<input type = "text" name ="name">
	<input type = "submit" name ="add_department" value= "Add Department">
	
</form>
<?php include 'main_footer.php';

?>