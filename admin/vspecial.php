<?php 
include('header.php'); 
include('sidebar.php');?>
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
                            <th>Staus</th>
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
                            
                            <td><label  class="switch">
                                            <input id="food_price" type="checkbox"   name="checkbox"  required="" class="form-control" 
                                        <?php if($row['flag'] == TRUE){?>checked onclick="Special_status(<?php echo $row['special_id']; ?>, 0)"<?php }else{ ?> unchecked onclick="Special_status(<?php echo $row['special_id']; ?>, 1)"  <?php } ?> >
                            <span class="slider"></span></label></td>
                           
                        </tr>
                        <?php }} ?>
                        
                    </tbody>
                   
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
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