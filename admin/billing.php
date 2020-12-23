<?php 
include('header.php');
include('sidebar.php');
include('connection.php');
$id=$_GET['id'];
?>
<style>
.title{
    font-size:25px;
    color:black;
    text-align:center;
}
hr{
    padding:0px;
    margin:0px;
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
                        $sql = "select * from tables";
                        $query = mysqli_query($conn,$sql);
                        if (mysqli_num_rows($query) > 0) {              
                            while($row = mysqli_fetch_assoc($query)) {                                             
                        ?>
                        <a href=""><h3 class="table-list-shift">Table: <?php echo $row['table_number']; ?></h3></a>
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
<a href="test.php?id=<?php echo $id ?>" class="btn btn-lg btn-light">Generate Table Bill</a>
</div>


</div>
<?php 
include('footer.php');
?>