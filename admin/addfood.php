<?php 
include('header.php');
include('sidebar.php');
include('connection.php');
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);	
    $price = $_POST['price'];
    $category = mysqli_real_escape_string($conn,$_POST['category']);
$query = mysqli_query($conn,"select * from foods where food_name='$name' ");
$usecount=mysqli_num_rows($query);	
if($usecount>0){
 echo "<script type='text/javascript'>alert(' Food Already Exist');
 window.location='addfood.php';
 </script>";
 }else{
$insertquery = "insert into foods(food_name,food_category,food_price) values('$name','$category',$price)";
 $query1=mysqli_query($conn,$insertquery);
 if($query1){
     ?>
     <script type="text/javascript"> 
     alert("Added!!"); 
    //location="viewmenu.php";
 </script>
  <?php
  }else{   
     ?>
     <script type="text/javascript"> 
     alert("Not Added"); 
         location="addfood.php";
 </script>
     <?php  
 }	
}
}
?>

<div class="row">
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Add Food</h5>
                                <div class="card-body">
                                    <form action="" method="POST" data-parsley-validate="">
                                        <div class="form-group">
                                            <label for="food_name"> Name</label>
                                            <input id="food_name" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter food name" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="food_price">Price</label>
                                            <input id="food_price" type="text" name="price" data-parsley-trigger="change" required="" placeholder="Enter price" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="food_category" type="dropdown">Category</label>
                                            <select class="form-control" name="category" >
                                            <option class="dropdown-item" value="" > Select Category</option>
                                            <?php 
                                                     $sql = "select * from categories";
                                                      $query = mysqli_query($conn,$sql);
                                                      if (mysqli_num_rows($query) > 0) {
                
                                                      while($row = mysqli_fetch_assoc($query)) {  
                                                     ?>
                                            <option class="dropdown-item" value="<?php echo $row['category_name'];?>"  ><?php echo $row['category_name'];?></option>
                                                     <?php
                                             }}?>
                                         </select>
                                          
                                        </div>
                                       
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right" id="aa">
                                                    <input value="Submit" type="submit" value="submit" name="submit" class="btn btn-space btn-primary">
                                                    <a href="additems.php" class="btn btn-space btn-success">Go Back</a>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form -->
                        <!-- ============================================================== -->
                    <style>
                        #aa>a{
                            color:white;
                        }
                         </style>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
</div>


<?php 
include('footer.php');
?>