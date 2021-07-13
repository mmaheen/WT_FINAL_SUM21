<?php include 'MainHeader.php';
	include 'controllers/CategoryController.php';
?>
<h5>
	<?php echo $db_err; ?>
</h5>
<form>
	name
	<input type = "text" name ="name">
	<input type = "submit" name ="add_category" value= "Add Category">
	
</form>
<?php include 'MainFooter.php';

?>