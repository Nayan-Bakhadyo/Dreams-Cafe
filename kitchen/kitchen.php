<?php

session_start();

if( $_SESSION["log"]!='kitchen'){
     header('Location: ../index.php');
}
include_once('kitchen_header.php');
include_once('../connection.php');
?>

        <div class="container-fluid "> 
          <h3>
            <div class="row text-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-left:-12px;">
                                <div class="card" style="width:630px;">
                                    <h3 class="card-header">Orders</h3>
                                    <div class="card-body p-1" >
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0 ">
                                                        <th class="border-0">ID</th>
                                                        <th class="border-0">Order Item</th>
                                                    <th class="border-0">Quantity </th>
                                                        <th class="border-0">Remark</th>
                                                        <th class="border-0">Cooked</th>
                                                        <th>Status </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
    <?php

   
        if (isset($_POST['submit'])){
            $sql = 'SELECT * FROM order_detail WHERE flag=0';
        
        }else  if (isset($_GET['order_id'])){
            $id= $_GET['order_id']-3;
            $sql ="SELECT * FROM order_detail WHERE order_id >= $id;";
     
        }else {
            $sql='SELECT * FROM order_detail WHERE flag=0';
        }
        $retval = mysqli_query( $conn, $sql );

        if(! $retval ) {
        die('Could not get data: ' . mysql_error());
        }

        while($row = mysqli_fetch_array($retval)) {
            $food_id= $row['food_id'];
            $sql2 = "SELECT food_name FROM foods WHERE food_id=$food_id";
                $result=mysqli_query( $conn, $sql2 );
                $food_name= mysqli_fetch_array($result);
                $order_id = $row['order_id'];
    ?>
                                                    <tr>
                            
                                                        <td><?php echo "{$row['order_id']}"?></td>
                                                        <td> <?php echo $food_name['food_name'] ?></td>
                                                        <td><?php echo "{$row['quantity']}"?></td>
                                                        <td><?php echo "{$row['remark']}"?></td>
                                                        <td>
                                                        <label class="switch">
                                                        <input type="checkbox"  
                                                        <?php if($row['flag']==0){?> unchecked onclick="Order_status(<?php echo $order_id ?>)" >
                                                        <span class="slider round"></span>
                                                        </label></td>
                                                        <td>
                                                        <span name="status" id="status" class="badge-dot badge-brand mr-1"></span>Pending </td>
                                                        <?php }else{?> checked disabled onclick="Order_status(<?php echo $order_id ?>)" ">
                                                            <span class="slider round"></span>
                                                            </label></td>
                                                            <td>
                                                            <span name="status" id="status" class="badge-dot badge-success mr-1"></span>Cooked </td>
                                                            <?php
                                                        } ?>
                                                    </tr>    

    <?php
        }
        mysqli_close($conn);
    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
</div>
</h3>
</div>
<div class="footer-all">
<?php
include_once('kitchen_footer.php');
?>
</body>
</html>