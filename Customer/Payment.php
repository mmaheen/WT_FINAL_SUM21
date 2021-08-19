<?php
require_once 'controllers/customerController.php';
//$id=$_GET["id"];
$p = getCustomer();//($id);
?>
<html>
    <head>
        <body>
            <form>
            <table>
               <?php
                    echo $_POST["name"]."<br>";
                    echo $_POST["comment"]."<br>";
               ?>
                        <!-- <tr>
						<td align="right" colspan="2"><a href ="payment.php"><input type="button" value="add"></a></td>
					    </tr> -->
            </table>
            </form>
        </body>
    </head>
</html>
