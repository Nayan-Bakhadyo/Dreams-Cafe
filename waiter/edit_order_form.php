<?php
include_once('../connection.php');
include_once('waiter_header.php');
include_once('waiter_sidenav.php');
$order_id=$_GET['order_id'];

// fetch order data from database
$sql="SELECT * from order_detail where order_id=$order_id;";
$retval = mysqli_query( $conn, $sql );

if(! $retval ) {
die('Could not get data: ' . mysql_error());
}
$row = mysqli_fetch_array($retval);

$food_id=$row['food_id'];
$sql2="SELECT food_name FROM foods WHERE food_id= $food_id;";
$retval2 = mysqli_query($conn, $sql2);
if(! $retval2 ) {
    die('Could not get data: ' . mysql_error());
    }
$row2 = mysqli_fetch_array($retval2);
?>
<h3>
 <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid centered ">
                         <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h1 class="card-header text-center">Edit Order</h1><hr>
                                    <div class="card-body">
                                        <form action="edit_order_process.php?order_id=<?php echo $order_id?>" method="post">
                                        <div class="form-group">
                                            <span style="font-size:28px; font-weight:bold;"> Ordered food: <?php echo $row2['food_name']; ?> </span>
                                        </div>
                                        <hr>
                                            <div class="form-group" >
                                                <label for="inputText3" class="col-form-label" style="font-size:28px; font-weight:bold;">Table No:</label>&nbsp;
                                                <?php $result = mysqli_query($conn,"SELECT * FROM table_detail");?>
                                                
                                    <select name="table_no" id="table_no"  class="custom-select custom-select-sm " style="font-size:22px; font-weight:bold; width:250px; height:auto;">
                                        <?php
                                         if (mysqli_num_rows($result) > 0) {
                                            while($row3 = mysqli_fetch_array($result)) {
                                            ?>
                                            <option><?php echo $row3["table_no"];?></option>

                                         <?php }}
                                            else{
                                                ?>
                                                <option value="no">--No tables--</option>
                                                <?php
                                            }
                                         ?>
                                        </select>
                                            </div><hr>
                                            <div class="form-group">
                                                <label for="quantity" style="font-size:28px; font-weight:bold;">Quantity:</label>
                                                <input id="quantity" name="quantity" Required type="number" value="<?php echo $row["quantity"];?>"  class="form-control"  style="font-size:22px; font-weight:bold; height:auto;">
                                                
                                            </div>
                                           <hr>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1" style="font-size:28px; font-weight:bold;">Remark:</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" cols="5" style="font-size:22px; font-weight:bold; height:auto; align:left;" name="remark" id="remark"> <?php echo $row['remark'];?></textarea>
                                            </div>
                                            <hr>
                                            <div class="form-group text-center">
                                            <button class="btn btn-primary" type="submit" style="border-radius:16px; font-size:20px;">SUBMIT</button>
                                            </div>
                                        </form>
                                    </div>
                           </div>
</div>
</div>
</h3>
<?php
include_once('waiter_footer.php');
?>
                        