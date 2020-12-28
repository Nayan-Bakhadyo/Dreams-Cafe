<?php 
include('header.php');
include('sidebar.php');
?>
                   
                   <div class="row pl-4 " >
                    <div class="col-md-5">
            <a href="viewincexp.php" id="btnh" class="btn btn-primary btn-lg btn-block btn-huge"><h3>VIEW INCOME & EXPENSE </h3></a>
        </div>
        <div class="col-md-5">
            <a href="incexp.php" id="btnh" class="btn btn-primary btn-lg btn-block btn-huge"><h3 align="center">MAKE ENTRIES</h3></a>
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