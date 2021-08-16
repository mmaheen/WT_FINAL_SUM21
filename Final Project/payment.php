<?php
require_once 'controllers/CategoryController.php';
require_once 'controllers/ProductController.php';

$id=$_GET["id"];
$p = getProduct($id);
?>
<html>
	<head>
		
	</head>
	<body>
		<table>
			<tr>
                <td>Product Name: </td>
				<td><?php echo $p["name"] ;?></td>
                        </tr>
		</table>
	</body>
</html>