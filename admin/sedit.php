<?php 
include('header.php');
include('sidebar.php');
include('connection.php');
if(isset($_POST['submit'])){
   
    $id=$_GET['id'];
    $name = mysqli_real_escape_string($conn,$_POST['name']);
   
    $remark= mysqli_real_escape_string($conn,$_POST['remark']);
    $price =$_POST['price'];
    $img_tmp = $_FILES['img']['tmp_name'];
    $img = $_FILES['img']['name'];
    $img_type = $_FILES['img']['type'];
    $allowed_type = array('image/png', 'image/gif', 'image/jpg', 'image/jpeg');
    
if(in_array($img_type, $allowed_type)) {
    $path = 'upload/'.$img; 
} else {
    $error[] = 'File type not allowed';
}

    $sqledit= "update specials set special_name='$name',special_image='$path',remark='$remark', special_price=$price  where special_id='$id'  ";          
    $query = mysqli_query($conn,$sqledit);
if($query){
    move_uploaded_file($img_tmp, $path);
?>
<script type="text/javascript"> 
alert("Edited!!"); location="editspec.php";
</script>

<?php

}else{
?>
<script type="text/javascript"> 
alert("Cannot Edit"); 
location="sedit.php";
</script>

<?php

} 
  }
        $id=$_GET['id'];
        $sql= "select * from specials where special_id=$id ";
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
                                <form class="needs-validation" action="" method="POST" enctype="multipart/form-data" novalidate>
                                        <div class="form-group">
                                            <label for="food_name"> Name</label>
                                            <input id="food_name" type="text" name="name" data-parsley-trigger="change" required="" value="<?php echo $row['special_name']; ?>" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="food_price">Image</label>
                                            <input id="food_price" type="file" id="img" name="img" data-parsley-trigger="change" required="" placeholder="Enter text" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="food_price">Price</label>
                                            <input id="food_price" type="text" name="price" value="<?php echo $row['special_price']; ?>" data-parsley-trigger="change" required="" placeholder="Enter price" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="food_price">Remark</label>
                                            <input id="food_price" type="text" name="remark" value="<?php echo $row['remark']; ?>" data-parsley-trigger="change" required="" placeholder="Enter price" autocomplete="off" class="form-control">
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
