<?php
require_once 'controllers/CategoryController.php';
require_once 'controllers/ProductController.php';
require_once 'controllers/customerController.php';


$id=$_GET["id"];
$p = getProduct($id);

?>
<html>
    <head>
    </head>
        <body>
            <h2>Product Description</h2>
            <fieldset>
                <form action="" method="post">
				
                    <table>
					<img src='".$p["img"]."' width='100px' height='100px'>
                        <tr>
                            <td>Product Name: </td>
                            <td><?php echo $p["name"] ;?></td>
                        </tr>
		
						<!-- <tr>
                            <td>Available Quantity: </td>
                            <td><?php echo $p["qty"] ;?></td>
                        </tr>
						
						<tr>
                            <td>Product Price: </td>
                            <td><?php echo $p["price"] ;?></td>
                        </tr>
						 -->
                         <tr>
                            <td>Name:</td>
                            <td><input type="text" name="name" value="<?php echo $name; ?>" placeholder="Name"></td>
                            <td><span><?php echo $err_name; ?></span></td>
                            
                        </tr>
						<tr>
                            <td>Comment: </td>
                            <td><textarea name = "comment" value="<?php echo $comment; ?>" placeholder= "give your feedback"></textarea></td>
                            <td><span><?php echo $err_comment; ?></span></td>
                        </tr>
                       
        
                        <!-- <tr>
                            <td>Product Description:</td>
                            
                        </tr> -->
                        <tr>
						<td align="right" colspan="2"><a href ="payment.php"><input type="submit" name="sub" value="submit"></a></td>
					    </tr>
                      </table>
					  
                
                </form>
            
            </fieldset>
            <h5><a href="allproducts.php">back</a></h5>
        
        </body>


</html>    
              