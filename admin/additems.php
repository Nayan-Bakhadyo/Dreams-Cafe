<?php 
include('header.php');
include('sidebar.php');
?>
                    <div class="row pl-4 " >
                    <div class="col-md-5">
            <a href="addcategories.php" id="btnh" class="btn btn-primary btn-lg btn-block btn-huge"><h3>Add Categories</h3></a>
        </div>
        <div class="col-md-5">
            <a href="addfood.php" id="btnh" class="btn btn-primary btn-lg btn-block btn-huge"><h3>Add Food</h3></a>
        </div>
    
    </div>
    <div class="goback"><a href="editmenu.php">&#8592; Go Back</a></div>
    <style>
        #btnh{
           margin-top:50px;
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