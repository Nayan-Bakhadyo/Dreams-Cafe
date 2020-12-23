<?php 
include('header.php'); 
include('sidebar.php');
include('connection.php');
if(isset($_POST['submit'])){
   
    $id=$_GET['id'];
    $flag =$_POST['checkbox'];

    $sqledit= "update specials set flag='$flag' where special_id='$id'  ";          
    $query = mysqli_query($conn,$sqledit);
if($query){

?>
<script type="text/javascript"> 
alert("Edited!!"); location="existingspec.php";
</script>

<?php

}else{
?>
<script type="text/javascript"> 
alert("Cannot Edit"); 
location="existingspec.php";
</script>

<?php

} 
  }
    
   ?>


<div class="row">
<!-- ============================================================== -->
<!-- data table  -->
<!-- ============================================================== -->
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Specials Table</h5>
           
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered second" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                           
                            <th>Remark</th>
                            <th>On/Off</th>
                        </tr>
                    </thead>
                    <tbody>                           
                        <?php 
                         include('connection.php');
                        $sql = "select * from specials";
                        $query = mysqli_query($conn,$sql);
                        if (mysqli_num_rows($query) > 0) {              
                            while($row = mysqli_fetch_assoc($query)) {                                             
                        ?>
                        <tr>
                            <td><?php echo $row['special_name']; ?></td>
                            <td><?php echo $row['special_price']; ?></td>
                            <td><?php echo "<img src='".$row['special_image']."' height='100px' width='auto'>" ?></td>
                       
                            <td><?php echo $row['remark']; ?></td>
                            
                            <td> <form action="" method="POST">
                                <!-- <a value="Submit" href="?id=<?php echo $row['special_id'] ?>" id="aa" class="btn btn-info" name="submit" type="submit">Edit</a> -->
                                 <label  class="switch">
                                            <input id="food_price" type="checkbox"   name="checkbox"  required="" class="form-control" 
                                        <?php if($row['flag'] == TRUE){?>checked <?php }else{ ?> unchecked    <?php } ?> >
                            <span class="slider"></span></label>
                                
                                            <a value="Submit" href="existingspec.php?id=<?php echo $row['special_id'] ?>"  id="submit" class="btn btn-primary" name="submit" type="submit">Submit</a>
                                            
                                                </form>
                                        </td>
                           
                        </tr>
                        <?php }} ?>
                        
                    </tbody>
                   
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================= -->
<!-- end data table  -->
<div class="goback"><a href="special.php">&#8592; Go Back</a></div>
</div></div>

<style>
.goback{
font-size:20px;

margin-left:12px;
}
#aa{color:white; padding:0px;}
                        
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

<?php
include('footer.php');
?>