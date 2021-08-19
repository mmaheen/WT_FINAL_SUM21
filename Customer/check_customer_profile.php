<?php
require_once 'controllers/customerController.php';
$customers=getCustomers();
?>
<html>
    <head>
        <body>
        <script src="js/products.js"></script>
                    <div class="center">
                    <h3 class="text">Profile</h3>
                    <input type="text" class="form-control" onkeyup="search(this)" placeholder="Search..." >
                    <div id="suggestions">
                    </div>
                    <table class="table table-striped">
                    <thead>
                    <th>Serial</th>
                    <th></th>
                    <th> Name</th>
                    <th>Username </th>
                    <th> Email</th>
                    <th></th>
                    <th></th>

                    </thead>
                    <tbody>

                    <?php
                    $i=1;
                    //foreach($customers as $c){
                    echo "<tr>";

                    echo "<td>$i</td>";
                   // echo "<td><img src='".$c["img"]."' width='100px' height='100px'></td>";
                    echo "<td>".$customers["name"]."</td>";
                    //echo "<td>".$p["c_name"]."</td>";
                    echo "<td>".$customers["uname"]."</td>";
                    echo "<td>".$customers["email"]."</td>";
                    echo "<td>".$customers["pass"]."</td>";
                    echo '<td><a href="cart.php?id='.$c["id"].'" class="btn btn-success">Add to cart</a></td>';
                    //echo '<td><a class="btn btn-danger">Delete</td>';
                    echo "</tr>";
                    $i++;
                    //}
                    ?>
                    </tbody>
                    </table>
                    </div>
        </body>


    </head>
</html>