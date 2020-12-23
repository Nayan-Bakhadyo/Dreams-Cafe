<?php 
include('header.php');
include('sidebar.php');
include('connection.php');
if(isset($_POST['submit'])){
   
    $id=$_GET['id'];
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $category = mysqli_real_escape_string($conn,$_POST['category']);
    $price =$_POST['price'];

    $sqledit= "update foods set food_name='$name', food_price=$price ,food_category='$category' where food_id='$id'  ";          
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
  }
        $id=$_GET['id'];
        $sql= "select * from foods where food_id=$id ";
        $query1 = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($query1);
      
   ?>
<div class="row">
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Add Food</h5>
                                <div class="card-body">
                                <form class="needs-validation" action="" method="POST" novalidate>
                                        <div class="form-group">
                                            <label for="food_name"> Name</label>
                                            <input id="food_name" type="text" name="name" data-parsley-trigger="change" required="" value="<?php echo $row['food_name']; ?>" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="food_price">Price</label>
                                            <input id="food_price" type="text" name="price" value="<?php echo $row['food_price']; ?>" data-parsley-trigger="change" required="" placeholder="Enter price" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="food_category" type="dropdown">Category</label>
                                            <select class="form-control" name="category" >
                                            <option class="dropdown-item" value="" > <?php echo $row['food_category']; ?></option>
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
                                       
                                        <div class="row pl-1 ">
                                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 col-3 " id="aa">
                                                <input value="Submit" class="btn btn-primary" name="submit" type="submit">
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ">
                                                <a href="vedit.php" class="btn btn-success" type="submit">Go Back </a>
                                            </div></div>
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
