<?php
include_once('../connection.php');
include_once('waiter_header.php');
include_once('waiter_sidenav.php');
?>
 <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce" style="margin-left:-12px;">
                <div class="container-fluid">
                                <h4>
        
            <div class="row text-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-left:0px;">
                                <div class="card" style="width:595px;">
                                    <h3 class="card-header">Orders</h3>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0 ">
                                                        <th class="border-0">ID</th>
                                                        <th class="border-0">Table no</th>
                                                        <th class="border-0">Order Item</th>
                                                    <th class="border-0">Quantity </th>
                                                        <th class="border-0">Remark</th>
                                                        <th class="border-0">Action</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
    <?php

   
            $sql = 'SELECT * FROM order_detail WHERE flag=0';
            $retval = mysqli_query( $conn, $sql );

        if(! $retval ) {
        die('Could not get data: ' . mysql_error());
        }

        while($row = mysqli_fetch_array($retval)) {
            $food_id=$row['food_id'];
            $sql2 = "SELECT food_name FROM foods WHERE food_id = $food_id;";
                $result=mysqli_query( $conn, $sql2 );
                $food_name= mysqli_fetch_array($result);
                $order_id = $row['order_id'];
    ?>
                                                    <tr>
                            
                                                        <td><?php echo "{$row['order_id']}"?></td>
                                                        <td><?php echo "{$row['table_no']}"?></td>
                                                        <td> <?php echo $food_name['food_name'] ?></td>
                                                        <td><?php echo "{$row['quantity']}"?></td>
                                                        <td><?php echo "{$row['remark']}"?></td>
                                                        <td>
                                                        <div class="row" style="padding: 5px; margin:2px;">
                                                        <a  href="edit_order_form.php?order_id=<?php echo $order_id?>" ><button class="btn btn-primary" style="padding:5px; border-radius:6px;">Edit</button></a>&nbsp;
                                                        <a href="cancel_order.php?order_id=<?php echo $order_id?>"> <button class="btn btn-danger" onclick='return confirm("Are you sure you want to delete this order?")' style="padding:5px; border-radius:6px;">Delete</button></a>
                                                        </div>
                                                       </td>
                                                            <?php
                                                        } ?>
                                                    </tr>    

    <?php
        
        mysqli_close($conn);
    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </h4>
                    </div>
                </div>
            </div>
            </div>
            

<?php
include_once('waiter_footer.php');
?>
                        