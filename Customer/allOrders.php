<?php
	require_once 'controllers/orderController.php';
	$orders = getAllOrders();
?>

<html>
	<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/mystyle.css"></head>

<div class="center">
	<h3 class="text">All Orders</h3>
	
</div>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
            <th>Price</th>
			<th>Quantity </th>
			<th></th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
		
			<?php
				$i=1;
				foreach($orders as $o){
					echo "<tr>";
						
						echo "<td>$i</td>";
						echo "<td>".$o["name"]."</td>";
						echo "<td>".$o["p_name"]."</td>";
						echo "<td>".$o["qty"]."</td>";
						echo '<td><a href="edit_order.php?id='.$o["id"].'" class="btn btn-success">Edit</a></td>';
                        echo '<td><a href="delete_order.php?id='.$o["id"].'" class="btn btn-success">Delete</a></td>';
						
					echo "</tr>";
					$i++;
				}
			?>
			<td><a href="dashboard.php?" class="btn btn-success">Back</a></td>
		</tbody>
	</table>
</div>
</html>