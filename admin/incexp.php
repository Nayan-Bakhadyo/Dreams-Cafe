<?php 
include('header.php');
include('sidebar.php');
include('connection.php');
?>

<?php 
include("connection.php");
$today_income =0;
$i=0;
$date = date('Y-m-d');
$sql = "SELECT amount FROM income WHERE date = '$date'";
$result = mysqli_query($conn,$sql); 

if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
               $today_income += $row['amount'];
                $i++;
        }
}
mysqli_close($conn);

include("header.php");
?>
        
            <div id="content">
           
            <div class="row" style="margin-bottom:20px;">
                    <div class="container-fluid" style="width:400px; height:auto; float:left; display:inline">
                        <div class="column">
                                <form name="income_form" action="income_process.php" method="post">
                                        <div><i style="font-size:40px; margin-bottom:20px;" class="fas fa-file-invoice-dollar"></i></div>
                                        <h5> Daily Income </h5>
                                        <div class="form-group"><input type="date" class="form-control" name="date" required="" placeholder="Date" /></div>
                                        <div class="form-group"><input type="number" class="form-control" name="amount" required="" placeholder="Amount" /></div>
                                        <div class="form-group"><input type="text" class="form-control" name="category" required="" placeholder="Category" /></div>
                                        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button></div>
                                        </form>
                                        </div>
                                </div>
                        
                                <div class="container-fluid" style="float:left; margin-left:0px; width:400px;">
                                        <div class="column">
                                        <form name="expense_form" method="post" action="expense_process.php" method="post">
                                        <div><i style="font-size:40px; margin-bottom:20px;" class="fas fa-file-invoice-dollar"></i></div>
                                        <h5> Daily Expense </h5>
                                        <div class="form-group"><input type="date" class="form-control" name="date" required="" placeholder="Date" /></div>
                                        <div class="form-group"><input type="number" class="form-control" name="amount" required="" placeholder="Amount" /></div>
                                        <div class="form-group"><input type="text" class="form-control" name="category" required="" placeholder="Category" /></div>
                                        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button></div>
                                        </form>
                                        </div>
                                </div> </div>
                        <hr>
                        <hr>
                <div class="row">
                        <div class="container-fluid" style="padding:20px; width:400px; float:left;display:inline; text-align:left;">
                        <h6 style="font-align:center;"> <?php echo date('Y/m/d');?> </h6>
                        <h6> Today's Income: Rs <?php echo $today_income ?></h6>
                        <h6> No. of Entry: <?php echo $i?></h6>
                        </div>
                        <div class="container-fluid" style="padding:20px; width:400px; float:left;display:inline; text-align:left;">
                        <!-- <h6> Today's Product Sales: Rs </h6>
                        <h6> Sold:  </h6> -->
                        </div>
                </div>
</div>
<?php
include("footer.php");
?>
</div>


<?php 
include('footer.php');
?>