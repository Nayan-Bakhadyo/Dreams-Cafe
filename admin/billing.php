<?php 

include('header.php');
include('sidebar.php');
include('connection.php');
$id=$_GET['id'];
$i=0;

?>
<script>
 function update_cookie(order_id, flag, bill){
  console.log("inside update flag2");
    window.location.href = "../flag_bill.php?order_id=" + order_id + "&flag=" + flag + "&bill=" + bill ;
  }
</script>
<style>
.title{
    font-size:25px;
    color:black;
    text-align:center;
}
hr{
 
    color:black;
}
.delete-table{
   float:right;
   padding:4px;
}
.table-bill{
    background-color:white;
    padding-top:20px;
}
.shift-table{
    display:inline-block;
    padding:4px;
    border:none;
}
.generate-table{
    padding:4px;
    text-align:center;
    
}
 .btn-lg{
    
    background-color:#c9c7c7;
    color:black;
}
.table-list-shift{
    padding-left:10px;
}
</style>

                               
<div class="container table-bill">
<div class="title"> Table No: <?php echo $id ?></div><hr>
                                  <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                    <thead>
                                            <tr>
                                                <th>Ordered Items</th>
                                                <th>Quantity</th>
                                                <th>Rate</th>
                                                <th>Amount</th>
                                              </tr>
                                        </thead>
                                        <?php
                                        $total_amount=0;
                                            $sql = "SELECT * FROM order_detail where flag = 1 AND table_no= $id;";
                                            $result = mysqli_query($conn,$sql); 
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                      $food_id = $row['food_id'];
                                                      $sql2 = "SELECT * FROM foods WHERE food_id = $food_id;";
                                                      $result2= mysqli_query($conn,$sql2);
                                                      $row2=mysqli_fetch_assoc($result2);
                                                      ?>
                                                    <tr>
                                                      <td><?php echo $row2['food_name']?></td>
                                                      <td><?php echo $row['quantity']?></td>
                                                      <td><?php echo $row2['food_price']?></td>
                                                      <?php $total = $row2['food_price'] * $row['quantity'];
                                                            $total_amount= $total_amount + $total;
                                                      ?>
                                                      <td><?php echo $total?></td>
                                                    </tr>
                                                    <?php $i=$i+1; }
                                                 
                                        ?>
                                                    <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>VAT (13%) </td>
                                                    <td><?php $vat = 0.13 * $total_amount;
                                                    echo $vat; ?></td>
                                                    </tr>
                                                    <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Total</td>
                                                    <td><?php echo $total_amount + $vat;?></td>
                                                    </tr>
                                         <tbody>
                                  </div>

<div class="shift-table">
<a href="" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-primary">Shift Table</a>
</div>
<!-- //shifting table modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">You Can Shift Table To Following:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  action="" method="POST">
      <div class="modal-body">
            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                       <?php 
                        $sql = "select * from table_detail";
                        $query = mysqli_query($conn,$sql);
                        if (mysqli_num_rows($query) > 0) {              
                            while($row = mysqli_fetch_assoc($query)) {                                             
                        ?><form method="POST">
                        <a href="billing.php?id=<?php echo $id;?>&table_id=<?php echo $row['table_no']; ?>"><h3 class="table-list-shift" >Table Number: <?php echo $row['table_no']; ?></h3></a>
                        </form>
                        <?php
                        }}
                       ?>                    
                    </div>
            </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
       
      </div>
      </form>
    </div>
  </div>
</div>
<div class="delete-table">
<a href="test.php?id=<?php echo $id ?>" class="btn btn-danger">Drop Table</a>
</div>

<div class="generate-table">
  <form method="post">
<button class="btn btn-lg btn-success" value="submit" id="billing" name="billing"><i class="fas fa-undo"> </i> &nbsp;Billing Complete</button>
</form>
</div>
<?php

//for changing flag on orders and mark them billed

if(isset($_POST['billing'])){
  $sql = "SELECT * FROM order_detail where flag = 1 AND table_no= $id;";
  $result = mysqli_query($conn,$sql); 
          while($row = mysqli_fetch_assoc($result)) {
          $order_id = $row['order_id'];?>
         <script type="text/javascript">
          var i = <?php echo $i-1; ?>; 
          var order_id = <?php echo $order_id;?>;
          var table =<?php echo $id;?>;
          update_flag2(order_id, 2, i, table);
          </script> 
 <?php 
}} 
if($_COOKIE['bill']>0) {  
  $sql = "SELECT * FROM order_detail where flag = 1 AND table_no= $id;";
  $result = mysqli_query($conn,$sql); 
          while($row = mysqli_fetch_assoc($result)) {
          $order_id = $row['order_id'];?>
         <script type="text/javascript">
          var i = <?php echo $i-1; ?>; 
          var order_id = <?php echo $order_id;?>;
          var table =<?php echo $id;?>;
          update_flag2(order_id, 2, i, table);
          </script> 
 <?php 
          }
}
//for swapping table
if(isset($_GET['table_id'])){
  $table_id=$_GET['table_id'];
  $sql = "SELECT * FROM order_detail where flag = 1 AND table_no= $id;";
  $result = mysqli_query($conn,$sql); 
          while($row = mysqli_fetch_assoc($result)) {
          $order_id = $row['order_id'];?>
         <script type="text/javascript">
         var init_table=<?php echo $id; ?>;
          var i = <?php echo $i-1; ?>; 
          var order_id = <?php echo $order_id;?>;
          var table =<?php echo $table_id;?>;
          swap_table(order_id, i,init_table, table);
          </script> 
 <?php 

}}
if($_COOKIE['swap']>0){
  $table_id=$_GET['table_id'];
  $sql = "SELECT * FROM order_detail where flag = 1 AND table_no= $id;";
  $result = mysqli_query($conn,$sql); 
          while($row = mysqli_fetch_assoc($result)) {
          $order_id = $row['order_id'];?>
         <script type="text/javascript">
         var init_table=<?php echo $table_id; ?>;
          var i = <?php echo $i-1; ?>; 
          var order_id = <?php echo $order_id;?>;
          var table =<?php echo $id;?>;
          swap_table(order_id, i,init_table, table);
          </script> 
 <?php 

}}

  ?>
  

</div>
<?php 
include('footer.php');
?>
<script>
    function swap_table(order_id, swap_count, init_table, table){
      console.log("inside swap");
      window.location.href = "../swap_table.php?order_id=" + order_id + "&swap_count=" + swap_count +"&table=" + table +"&init_table="+ init_table;

    }
</script>