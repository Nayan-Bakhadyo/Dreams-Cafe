<?php
include_once('../connection.php');
include_once('waiter_header.php');
include_once('waiter_sidenav.php');
?>
<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce" style="margin-left:-12px;">
                <div class="container-fluid abc">
                <?php 


?>
<style>
.abc >*{
    font-family: 'Dancing Script', cursive;
    color:#ffdf29;
}
.menucon{
    background-color:rgb(13, 0, 0);
}
.s{
    padding:30px;
}
.forow{
    padding:5px;
    margin-bottom:57px;
}
.fooditem{
    font-size:27px;
}
.foodprice{
    font-size:23px;
}
.food-title{
    font-size:50px;
    margin-bottom:0px; 
    text-align:center;
}
.return{
    font-size:40px;
    padding:20px;
    font-family: 'Dancing Script', cursive;
    color:#ffdf29;
}
.name{
    font-size:72px;
    
}
.specialsec{
    padding:20px;
}
.specimg{
    height:500px;
    width:1000px;
    padding:20px;
   display:inline-block;
   margin:auto;
}
.spectitle{
    font-size:42px;
    text-align:center;
    text-decoration:underline;
}
/* @media (min-width:481px) {
.s{
    padding-top:2px;
    padding-left:30px;
    padding-right:30px;
}
.forow{
    padding:5px;
    margin-bottom:7px;
}
.fooditem{
    font-size:18px;
}
.foodprice{
    font-size:7px;
}
.food-title{
    font-size:40px;
    margin-bottom:0px;
}
.return{
    font-size:20px;
    padding:2px;
}
.name{
    font-size:32px;
    font-family: 'Dancing Script', cursive;
    
}
} */
@media only screen and (max-device-width: 768px){
.s{
    padding-top:3px;
    padding-left:35px;
    padding-right:35px;
}
.forow{
    padding:5px;
    margin-bottom:7px;
}
.fooditem{
    font-size:22px;
}
.foodprice{
    font-size:18px;
}
.food-title{
    font-size:40px;
    margin-bottom:0px;
}
.return{
    font-size:20px;
    padding:2px;
    font-family: 'Dancing Script', cursive;
    color:#ffdf29;
}
.name{
    font-size:42px;
    line-height:0.5;
}
.specimg{
    height:400px;
    width:800px;
    padding:10px; 
}
.spectitle{
    font-size:38px;
    text-align:center;
    text-decoration:underline;
}
.spname,.sremark,.sprice{
    line-height:1.1;
    padding:1px;
    margin:0.5px;
    font-size:26px;     
    text-align:center; 
} 

hr{
    border-top:0.8px solid #ffdf29;  
}
}

.spname,.sremark,.sprice{
    line-height:1.3;
    padding:1px;
    margin:0.5px;
    font-size:38px;     
    text-align:center; 
}
hr{
    border-top: solid #ffdf29;  
}
hr.rowhr{
    border-top: 1px dotted #ffdf29;  
}
a{
    color:#ffdf29;
}
a:hover{
    color:#ffdf29;
}
</style>
<div class="container menucon">
    <p align="center" class="return"> <a href="index.php"> Return To Dashboard</a></p>
    <p align="center" class="name mb-1">Dreams Cafe And Restaurant</p>

<hr>
    <div class="specialsec">
        <p class="spectitle mb-0">Today's Special</p>
        <?php
        $sql = "select * from specials WHERE flag=1";
 $query = mysqli_query($conn,$sql);
 if (mysqli_num_rows($query) > 0) {
    while($row = mysqli_fetch_assoc($query)) { ?>
        <div class="row">
            <img src="../admin/<?php echo $row['special_image'];?>" class="specimg" alt="<?php echo $row['special_name'];?>"> 
        </div>
        <div class="desc">
           <a href="#"> <p class="spname"> <u><?php echo $row['special_name'];?></u></p></a>
            <p class="sremark"> <u><?php echo $row['remark'];?></u> </p> 
            <p class="sprice"><u>Rs.<?php echo $row['special_price'];?></u></p>
        </div>
        <hr>
   <?php }}
?>

<hr><br>
    <div class="container s">
    <?php 
      
         
         $sql = "select * from foods ";
         $query = mysqli_query($conn,$sql);
         if (mysqli_num_rows($query) > 0) {
             $c_cat="STARTERS";
             ?>
            
            <div class="row forow " >
            <?php
         while($row = mysqli_fetch_assoc($query)) { 
             
            if($row['food_category']==$c_cat){ ?>
                  <div class="col-md-1"></div>
                  <div class="col-md-9 fooditem"><a href="order.php?food_id=<?php echo $row['food_id'];?>"> <p><?php echo $row['food_name'];?> </p></a></div>
                  <div class="col-md-2 foodprice"> <p><?php echo $row['food_price'];?>/-</p></div>
           <?php }else{
                 $c_cat=$row['food_category']; ?>
                 
                 </div><hr class="rowhr">
                    <p class="food-title"><?php echo $c_cat ?></p>
                    <div class="row forow " >
                    <div class="col-md-1"></div>
                    <div class="col-md-9 fooditem"><a href="order.php?food_id=<?php echo $row['food_id'];?>"><p><?php echo $row['food_name'];?></p></a></div>
                    <div class="col-md-2 foodprice"> <p><?php echo $row['food_price'];?>/-</p></div>
           <?php }
        }} 
        
        ?>
        
        </div>

                </div>
        </div>
<?php
include_once('waiter_footer.php');
?>
</div>