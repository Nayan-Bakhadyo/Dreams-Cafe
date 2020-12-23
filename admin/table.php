<?php 
include('header.php');
include('sidebar.php');
include('connection.php');
if(isset($_POST['submit'])){
    $number=$_POST['tnumber'];
    	
$query = mysqli_query($conn,"select table_no from table_detail where table_no='$number' ");
$usecount=mysqli_num_rows($query);	
if($usecount>0){
 echo "<script type='text/javascript'>alert(' Table Exist');
 window.location='table.php';
 </script>";
 }else{

   
$insertquery = "insert into table_detail( table_no) values('$number')";
 $query1=mysqli_query($conn,$insertquery);
 if($query1){
     ?>
     <script type="text/javascript"> 
     alert("Table Added!!"); 
    location="table.php";
 </script>
  <?php
  }else{   
     ?>
     <script type="text/javascript"> 
     alert("Not Added"); 
         location="table.php";
 </script>
     
     <?php
     
 }	
}
}
?>


<div class="container">
<div class="row">
<?php 
  $sql = "select * from table_detail";
  $query = mysqli_query($conn,$sql);
  if (mysqli_num_rows($query) > 0) {              
      while($row = mysqli_fetch_assoc($query)) {                                             
  ?>
        <div class="col-md-4">
            <a href="billing.php?id=<?php echo $row['table_no']; ?> " id="custbut" class="btn btn-primary btn-lg btn-block btn-huge"><p>Table <?php echo $row['table_no']; ?></p></a>
        </div>

      <?php }} ?>
        <div class="col-md-4">
            <a href="" id="plusbut" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-primary btn-lg btn-block btn-huge">
            <i class="fas fa-plus fa-5x" ></i></a>
        </div>
        
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Adding Table</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  action="" method="POST">
      <div class="modal-body">
            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                        <label for="tnumber">Enter Table Number:</label>
                        <input type="text" class="form-control" name="tnumber" id="tnumber"  required>                     
                    </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input  value="Add Table" name="submit" type="submit" class="btn btn-primary">
      </div>
      </form>
    </div>
  </div>
</div>
<style>
.btn-primary{background-color:#00AE68;}
.btn-primary:hover{background-color:#21825B;}
#custbut{
    padding:55px;
    margin:25px;
    font-size:28px;
}
#plusbut{
    margin:25px;
    padding:38.9px;
}
</style>
<?php 
include('footer.php');
?>