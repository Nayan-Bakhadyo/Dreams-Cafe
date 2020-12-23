<?php 
include('header.php');
include('sidebar.php');
include('connection.php');

if(isset($_POST['submit'])){
    $id=$_GET['id'];
    $category = mysqli_real_escape_string($conn,$_POST['category']);

$query = mysqli_query($conn,"select * from categories where category_name='$category' ");
$usecount=mysqli_num_rows($query);	
if($usecount>0){
 echo "<script type='text/javascript'>alert(' Category Already Exist');
 </script>";
 }else{
    $sqledit= "update categories set category_name='$category' where category_id='$id'  ";
                      
    $query = mysqli_query($conn,$sqledit);
if($query){

?>
<script type="text/javascript"> 
alert("Edited!!"); location="vedit.php";
</script>

<?php

}else{
?>
<script type="text/javascript"> 
alert("Cannot Edit"); 
location="vedit.php";
</script>

<?php

} 
  }}
        $id=$_GET['id'];
        $sql= "select * from categories where category_id=$id ";
        $query1 = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($query1);
      
   ?>
<div class="row">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit Categories</h5>
                                <div class="card-body">
                                    <form class="needs-validation" action="" method="POST" novalidate>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                                <label for="food_category">Category Name</label>
                                                <input type="text" class="form-control" name="category" id="food_category" value="<?php echo $row['category_name']; ?>"  required>
                                               
                                            </div>
                                            <div class="row ml-2 ">
                                            <p id="aaa">
                                                <input class="btn btn-primary" value="Submit" name="submit" type="submit">
                                            
                                            
                                                <a href="additems.php" class="btn btn-success" type="submit">Go Back </a>
                                            </div></p>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <style>
                        #aa>a{
                            color:white;
                        }
                        #aaa{ padding:1px; margin:5px;}
                         </style>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
</div>

<?php 
include('footer.php');
?>
