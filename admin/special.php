<?php 
include('header.php');
include('sidebar.php');
?>
                   
                   <div class="row pl-4 " >
                    <div class="col-md-5">
            <a href="addspecial.php" id="btnh" class="btn btn-primary btn-lg btn-block btn-huge"><h3>Add New Item </h3></a>
        </div>
        <div class="col-md-5">
            <a href="existingspec.php" id="btnh" class="btn btn-primary btn-lg btn-block btn-huge"><h3 align="center">Choose Existing</h3></a>
        </div>
    
    </div>
    <div class="row pl-4 " style=" margin-top:50px;">
                    <div class="col-md-5">
            <a href="editspec.php" id="btnh" class="btn btn-primary btn-lg btn-block btn-huge"><h3>Edit Specials</h3></a>
        </div>
        <div class="col-md-5">
            <a href="vspecial.php" id="btnh" class="btn btn-primary btn-lg btn-block btn-huge"><h3>View All Specials</h3></a>
        </div>
    
    </div>
    
    <style>
        #btnh{
          
           padding:80px;
        color:#1a1aff;
        }
        h3{
            color:rgb(0, 0, 26);
        }
        .goback{
            font-size:20px;
            padding-top:18px;
            margin-left:12px;
        }

    </style>
 <?php 
include('footer.php');
?>