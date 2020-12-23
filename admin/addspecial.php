<?php 
include('header.php');
include('sidebar.php');
include('connection.php');
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);	
    $price = $_POST['price'];
    $category = mysqli_real_escape_string($conn,$_POST['category']);
    $remark = mysqli_real_escape_string($conn,$_POST['remark']);
    $img_tmp = $_FILES['img']['tmp_name'];
    $img = $_FILES['img']['name'];
    $img_type = $_FILES['img']['type'];
    $allowed_type = array('image/png', 'image/gif', 'image/jpg', 'image/jpeg');
    $flag=(isset($_POST['checkbox'])) ? 1 : 0;;
    
if(in_array($img_type, $allowed_type)) {
    $path = 'upload/'.$img; 
} else {
    $error[] = 'File type not allowed';
}
$query = mysqli_query($conn,"select * from specials where special_name='$name' ");
$usecount=mysqli_num_rows($query);	
if($usecount>0){
 echo "<script type='text/javascript'>alert(' Special Already Exist');
 window.location='addspecial.php';
 </script>";
 }else{
$insertquery = "insert into specials(special_name,special_image,special_price,special_category,remark,flag) values('$name','$path',$price,'$category','$remark','$flag')";
 $query1=mysqli_query($conn,$insertquery);
 if($query1){
    move_uploaded_file($img_tmp, $path);
     ?>
     <script type="text/javascript"> 
     alert("Added!!"); 
   // location="viewspecial.php";
 </script>
  <?php
  }else{   
     ?>
     <script type="text/javascript"> 
     alert("Not Added"); 
        // location="addspecial.php";
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
                                <form action="" method="POST" data-parsley-validate="" enctype="multipart/form-data" >
                                        <div class="form-group">
                                            <label for="food_name"> Name</label>
                                            <input id="food_name" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter food name" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="food_price">Image</label>
                                            <input id="food_price" type="file" id="img" name="img" data-parsley-trigger="change" required="" placeholder="Enter text" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="food_price">Price</label>
                                            <input id="food_price" type="text" name="price" data-parsley-trigger="change" required="" placeholder="Enter price" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="food_price">Remark</label>
                                            <input id="food_price" type="text" name="remark" data-parsley-trigger="change" required="" placeholder="Add remarks" autocomplete="off" class="form-control">
                                        </div>
                                       
                                       <div class="form-group">
                                        <label  class="switch">
                                            <input id="food_price" type="checkbox" name="checkbox"  required="" class="form-control">
                                            <span class="slider"></span></label>  <font style="font-size:16px;">Add As Today's Special  </font>                                         </div>
                                            <div class="col-sm-0  pt-1">
                                                <p class="text-right" id="aa">
                                                    <input type="submit" name="submit" value="Submit"  class="btn btn-space btn-primary">
                                                    
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="goback"><a href="special.php">&#8592; Go Back</a></div>
                        <!-- ============================================================== -->
                        <!-- end basic form -->
                        <!-- ============================================================== -->
                    <style>
                        #aa>a{
                            color:white;
                        }
                        
.switch input { 
    display:none;
}
.switch {
    display:inline-block;
    width:60px;
    height:20px;
    margin:8px;
    transform:translateY(50%);
    position:relative;
}
/* Style Wired */
.slider {
    position:absolute;
    top:0;
    bottom:0;
    left:0;
    right:0;
    border-radius:30px;
    box-shadow:0 0 0 2px #777, 0 0 4px #777;
    cursor:pointer;
    border:4px solid transparent;
    overflow:hidden;
     transition:.4s;
}
.slider:before {
    position:absolute;
    content:"";
    width:100%;
    height:100%;
    background:#777;
    border-radius:30px;
    transform:translateX(-30px);
    transition:.4s;
}

input:checked + .slider:before {
    transform:translateX(30px);
    background:#00004d;
}
input:checked + .slider {
    box-shadow:0 0 0 2px #00004d,0 0 2px #00004d;
}

/* Style Flat */
.switch.flat .slider {
 box-shadow:none;
}
.switch.flat .slider:before {
  background:#FFF;
}
.switch.flat input:checked + .slider:before {
 background:white;
}
.switch.flat input:checked + .slider {
  background:#00004d;
}
                         </style>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
</div>
<?php 
include('footer.php');
?>