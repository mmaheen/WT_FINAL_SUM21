<?php include 'admin_header.php';
	include 'controllers/customerController.php';
	//$id = $_GET["id"];
	$customer = getCustomers();
?>
<!--All Categories starts -->

<div>
	<h3 class="text">Customer Profile</h3>
	<table >
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Username </th>
			<th>Email</th>
			<th>Password</th>
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($customer as $c){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$c["name"]."</td>";
						echo "<td>".$c["uname"]."</td>";
						echo "<td>".$c["email"]."</td>";
						echo "<td>".$c["pass"]."</td>";
						echo '<td><a href="check_customer_profile.php?id='.$c["id"].'" class="btn btn-success">Profile</a></td>';
						echo '<td><a href="deleteProfile.php?id='.$c["id"].'" class="btn btn-success">Delete</a></td>';
						//echo '<td><a>Log out</a></td>';
					echo "</tr>";
					$i++;
				}
			?>
			
			
		</tbody>
	</table>
</div>
<!--All Categories ends -->
<?php include 'admin_footer.php';?>