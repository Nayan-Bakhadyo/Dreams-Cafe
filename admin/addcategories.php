<?php 
include('header.php');
include('sidebar.php');
include('connection.php');
if(isset($_POST['submit'])){
    $category = mysqli_real_escape_string($conn,$_POST['category']);


	
$query = mysqli_query($conn,"select * from categories where category_name='$category' ");
$usecount=mysqli_num_rows($query);	
if($usecount>0){
 echo "<script type='text/javascript'>alert(' Category Already Exist');
 window.location='addcategories.php';
 </script>";
 }else{

   
$insertquery = "insert into categories( category_name) values('$category')";
 $query1=mysqli_query($conn,$insertquery);
 if($query1){
     ?>
     <script type="text/javascript"> 
     alert("Added!!"); 
    location="additems.php";
 </script>
  <?php
  }else{   
     ?>
     <script type="text/javascript"> 
     alert("Not Added"); 
         location="addcategories.php";
 </script>
     
     <?php
     
 }	
}
}
?>

<div class="row">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Add Categories</h5>
                                <div class="card-body">
                                    <form  action="" method="POST">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                                <label for="food_category">Category Name</label>
                                                <input type="text" class="form-control" name="category" id="food_category" placeholder="Enter Name" required>
                                               
                                            </div>
                                            <div class="row ml-2 ">
                                            <p id="aaa">
                                                <input class="btn btn-primary" value="Submit" name="submit" type="submit">
                                            
                                            
                                                <a href="additems.php" class="btn btn-success" type="submit">Go Back </a>
                                            </div></p>
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